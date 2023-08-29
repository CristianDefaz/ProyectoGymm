function actualizarTiempoRestante() {
  $(".tiempo-restante").each(function () {
    const men_id = $(this).data("men-id");
    const fechaFinMembresia = $(this).data("fecha-fin");

    const tiempoRestante = calcularTiempoRestante(fechaFinMembresia, men_id);
    $(this).text(tiempoRestante);
  });
}

function init() {
  $('#Membresia_form').on('submit', (e) => {
    guardayeditarmembresias(e);
  });

  $(document).ready(() => {
    tablamembresia();
    cargaSelectcitipo();
    actualizarTiempoRestante(); // Actualizar inicialmente

    // Actualizar cada segundo (1000 milisegundos)
    setInterval(() => {
      actualizarTiempoRestante();
    }, 1000);
  });
}

var tablamembresia = () => {
  var html = "";
  $.post(
    "../../controllers/membresia.controller.php?op=todos", {}, (listamembresia) => {
      listamembresia = JSON.parse(listamembresia);
      $.each(listamembresia, (index, membresia) => {
        html +=
        `<tr>` +
        `<td>${index + 1}</td>` +
        `<td>${membresia.cli_cedula}</td>` +
        `<td>${membresia.tipo_menbresia}</td>` +
        `<td>${membresia.men_fecha_inicio}</td>` +
        `<td>${membresia.men_fecha_fin}</td>` +
        `<td class="tiempo-restante" data-men-id="${membresia.men_id}" data-fecha-fin="${membresia.men_fecha_fin}">
        ${calcularTiempoRestante(membresia.men_fecha_fin, membresia.men_id)}
      </td>` +
        `<td>${membresia.men_estado}</td>` +
        `<td>` +
        `<button class='btn btn-success' onclick='uno(${membresia.men_id})'>Editar</button>` +
        `<button class='btn btn-danger' onclick='eliminar(${membresia.men_id})'>Eliminar</button>` +
        `</td>` +
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
  



  var cargaSelectcitipo = () => {
    var htmlCliente = '<option value="0">Seleccione una Opción</option>';
    var htmlTipo = '<option value="0">Seleccione una Opción</option>';
  
    // Cargar datos desde el archivo cliente.controller.php
    $.post("../../controllers/cliente.controller.php?op=todos", (listaclientes) => {
      listaclientes = JSON.parse(listaclientes);
      $.each(listaclientes, (index, cliente) => {
        htmlCliente += `<option value="${cliente.cliente_id}">${cliente.cli_nombre}- Ci:${cliente.cli_cedula}</option>`;
      });
      $("#cliente_id").html(htmlCliente);
    });
  
    // Cargar datos desde el archivo membresia.controller.php
    $.post("../../controllers/tipo.membresia.controller.php?op=todos", (listacitipo) => {
      listacitipo = JSON.parse(listacitipo);
      $.each(listacitipo, (index, tipo_menbresia) => {
        htmlTipo += `<option value="${tipo_menbresia.tipo_id}">${tipo_menbresia.tipo_menbresia}</option>`;
      });
      $("#tipo_id").html(htmlTipo);
    });
  };
 

  var guardayeditarmembresias = (e) => {
    e.preventDefault();
    var url = "";
  
    var men_id = document.getElementById("men_id").value;
    if (men_id === undefined || men_id === "") {
      url = "../../controllers/membresia.controller.php?op=insertar";
    } else {
      url = "../../controllers/membresia.controller.php?op=actualizar";
    }
    var form_Data = new FormData($("#Membresia_form")[0]);
    $.ajax({
      url: url,
      type: "POST",
      data: form_Data,
      processData: false,
      contentType: false,
      cache: false,
      success: (respuesta) => {
        try{
          respuesta = JSON.parse(respuesta);
          console.log(respuesta);
          if (respuesta == "ok") {
            Swal.fire('Categoria de membresia', 'Se guardo con exito', 'success');
            limpiar();
            tablamembresia();
          } else {
            Swal.fire('Categoria de membresia', 'Ocurrio un error', 'danger');
          }
        }catch(error){
        Swal.fire('Error', 'No se puede guardar la membresia, ya que esta se encuentra registrada, elimine la membresia existente e intente nuevamente', 'error');
      }
      },
    });
  };
  
  var uno = (men_id) => {
    $.post('../../controllers/membresia.controller.php?op=uno', {
      men_id: men_id
    }, (res) => {
      res = JSON.parse(res);
      $('#men_id').val(res.men_id);
      $('#cliente_id').val(res.cliente_id);
      $('#tipo_id').val(res.tipo_id);
      $('#men_fecha_inicio').val(res.men_fecha_inicio);
      $('#men_fecha_fin').val(res.men_fecha_fin);
      $('#men_estado').val(res.men_estado);
    })
    document.getElementById('tituloModalMembresia').innerHTML = "Editar membresia";
    $('#modalMembresia').modal('show');
  };
  var eliminar = (men_id) => {
    Swal.fire({
      title: 'Membresia',
      text: "Esta seguro que desea eliminar...???",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Eliminar!!!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.post('../../controllers/membresia.controller.php?op=eliminar', {
          men_id: men_id
        }, (res) => {
          res = JSON.parse(res);
          if (res === 'ok') {
            Swal.fire('Membresia', 'Se eliminó con éxito', 'success');
            limpiar();
            tablamembresia();
          }
        })
      }
    })
  };
  
  var limpiar = () => {
    $('#men_id').val('');
    $('#cliente_id').val('0');
    $('#tipo_id').val('0');
    var formattedFechaActual = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes ;

    // Establecer la fecha y hora actual como el valor del campo de entrada de fecha de inicio
    fechaInicioInput.value = formattedFechaActual;
    $('#men_fecha_inicio').val(formattedFechaActual);
    $('#men_fecha_fin').val('');
    $('#men_estado').val('Activo');
    $('#modalMembresia').modal('hide');
    document.getElementById('tituloModalMembresia').innerHTML = "Nueva membresia";
  };
  init();
  