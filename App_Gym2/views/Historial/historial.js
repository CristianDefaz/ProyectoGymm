$().ready(() => {
    TablaHistorial();
  });
  var TablaHistorial = () => {
    var html = "";
    $.post(
      "../../controllers/historial.controller.php?op=todos", {}, (listahistorial) => {
        listahistorial = JSON.parse(listahistorial);
        $.each(listahistorial, (index, historial) => {
          html +=
            `<tr>` +
            `<td>${index + 1}</td>` +
            `<td>${historial.detalle}</td>` +
            `<td>${historial.cli_nombre} ${historial.cli_apellido}</td>` +
            `<td>${historial.usuario}</td>` +
            `<td>${historial.em_nombre}</td>` +
            `<td>${historial.nom_tabla}</td>` +
            
            `<td>${historial.operacion_tabla}</td>` +
            `</tr>`;
        });
        $("#TablaHistorial").html(html);
      }
    );
  };