//TODO: Archivo de javascript para agregar la funcionalidad 
function init() {
    $('#Membresia_form').on('submit', (e) => {
      guardayeditarmembresias(e);
    })
  }
  
  $().ready(() => {
    tablamembresia();

  });
  var tablamembresia = () => {
    var html = "";
    $.post(
        "../../controllers/membresia.controller.php?op=todos1", {}, (listamembresia) => {
          console.log(listamembresia); // Agrega esta línea para depurar
          listamembresia = JSON.parse(listamembresia);
        $.each(listamembresia, (index, membresia) => {
          html +=
          `<tr>` +
          `<td>${index + 1}</td>` +
          `<td>${membresia.cli_cedula}</td>` +
          `<td>${membresia.tipo_menbresia}</td>` +
          `<td>${membresia.men_fecha_inicio}</td>` +
          `<td>${membresia.men_fecha_fin}</td>` +
          `<td>${calcularTiempoRestante(membresia.men_fecha_fin, membresia.men_id)}</td>`+
          `<td>${membresia.men_estado}</td>` +
          `<td>` +
          `</tr>`;
        });
        $("#TablaMembresia").html(html);
      }
    );
  };
  function calcularTiempoRestante(fechaFinMembresia, men_id) {
    const fechaFin = new Date(fechaFinMembresia).getTime();
    const fechaActual = new Date().getTime();
    const tiempoRestanteEnMilisegundos = fechaFin - fechaActual;
    console.log(men_id);
    // Si la membresía ha expirado, realizar la actualización del estado en la base de datos
    if (tiempoRestanteEnMilisegundos <= 0) {
      // Realizar la llamada AJAX para actualizar el estado
          // Realizar la llamada AJAX para actualizar el estado
          $.ajax({
            url: "../../controllers/membresia.controller.php?op=actualizarme",
            type: "POST",
            data: { men_id: men_id, men_estado: "Expirado"},
            success: (respuesta) => {
              respuesta = JSON.parse(respuesta);
              console.log(respuesta);
              if (respuesta == "ok") {
                // Actualización exitosa, mostrar mensaje u realizar otras acciones necesarias
                console.log("Se actualizó correctamente");
              } else {
                // Error al actualizar el estado, mostrar mensaje de error u realizar acciones necesarias
                console.log("Error al actualizar");
              }
            },
          });
      return "Expirado"; // Retornar el mensaje "Expirado" si la membresía ha expirado
    }
  
    // Calcular días, horas, minutos y segundos restantes
    const diasRestantes = Math.floor(tiempoRestanteEnMilisegundos / (1000 * 60 * 60 * 24));
    const horasRestantes = Math.floor((tiempoRestanteEnMilisegundos % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutosRestantes = Math.floor((tiempoRestanteEnMilisegundos % (1000 * 60 * 60)) / (1000 * 60));
    const segundosRestantes = Math.floor((tiempoRestanteEnMilisegundos % (1000 * 60)) / 1000);
  
    // Formatear el tiempo restante en una cadena
    const tiempoRestanteFormateado = `${diasRestantes} días, ${horasRestantes} horas, ${minutosRestantes} minutos, ${segundosRestantes} segundos`;
  
    return tiempoRestanteFormateado;
  }
  init();
  