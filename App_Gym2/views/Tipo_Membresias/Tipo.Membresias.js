function init() {
    $('#Tmembresias_form').on('submit', (e) => {
        guardayeditaTmenbresia(e);
    })
  }
  $().ready(() => {
    cargartablaM();
  });
var cargartablaM = () => {
    var html = "";
    $.post(
        "../../controllers/tipo.membresia.controller.php?op=todos", {}, (listamembresias) => {
            listamembresias = JSON.parse(listamembresias);
            $.each(listamembresias, (index, membresia) => {
                html +=
                    `<tr>` +
                    `<td>${index + 1}</td>` +
                    `<td>${membresia.tipo_menbresia}</td>` +
                    `<td>${membresia.tipo_descripcion}</td>` +
                    `<td>${membresia.tipo_duracion}</td>` +
                    `<td>${membresia.tipo_precio_mensual}</td>` +
                    `<td>${membresia.tipo_costo}</td>` +
                    `<td>` +
                    `<button class='btn btn-success' onclick='uno(${membresia.tipo_id})' hidden>Editar</button>` +
                    `<button class='btn btn-danger' onclick='eliminar(${membresia.tipo_id})' hidden>Eliminar</button>` +
                    `</td>` +
                    `</tr>`;
            });
            $("#TablaTMembresias").html(html);
        }
    );
};
var guardayeditaTmenbresia = (e) => {
    e.preventDefault();
    var url = "";
  
    var tipo_id = document.getElementById("tipo_id").value;
    if (tipo_id === undefined || tipo_id=== "") {
      url = "../../controllers/tipo.membresia.controller.php?op=insertar";
    } else {
      url = "../../controllers/tipo.membresia.controller.php?op=actualizar";
    }
    var form_Data = new FormData($("#Tmembresias_form")[0]);
    $.ajax({
      url: url,
      type: "POST",
      data: form_Data,
      processData: false,
      contentType: false,
      cache: false,
      success: (respuesta) => {
        respuesta = JSON.parse(respuesta);
        console.log(respuesta);
        if (respuesta == "ok") {
          Swal.fire('Categoria de Tipo de menbresia', 'Se guardo con exito', 'success');
          limpiar();
          cargartablaM();
        } else {
          Swal.fire('Categoria de Tipo de menbresia', 'Ocurrio un error', 'danger');
        }
      },
    });
  };
  
  var uno = (tipo_id ) => {
    $.post('../../controllers/tipo.membresia.controller.php?op=uno', {
        tipo_id : tipo_id 
    }, (res) => {
      res = JSON.parse(res);
      $('#tipo_id').val(res.tipo_id);
      $('#tipo_menbresia').val(res.tipo_menbresia);
      $('#tipo_descripcion').val(res.tipo_descripcion);
      $('#tipo_duracion').val(res.tipo_duracion);
      $('#tipo_precio_mensual').val(res.tipo_precio_mensual);
      $('#tipo_costo').val(res.tipo_costo);
    })
    document.getElementById('tituloModalTmenbresias').innerHTML = "Editar Tipo menbresia";
    $('#modalMembresias').modal('show');
  };
  var eliminar = (tipo_id) => {
    Swal.fire({
      title: 'Cliente',
      text: "Esta seguro que desea eliminar...???",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Eliminar!!!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.post('../../controllers/cliente.controller.php?op=eliminar', {
            tipo_id : tipo_id 
        }, (res) => {
          res = JSON.parse(res);
          if (res === 'ok') {
            Swal.fire('Cliente', 'Se eliminó con éxito', 'success');
            limpiar();
            cargartablaM();
          }
        })
      }
    })
  };
  
  var limpiar = () => {
    $('#tipo_id').val('');
    $('#tipo_menbresia').val('');
    $('#tipo_descripcion').val('');
    $('#tipo_duracion').val('');
    $('#tipo_precio_mensual').val('');
    $('#tipo_costo').val('');
    
    $('#modalMembresias').modal('hide');
    document.getElementById('tituloModalTmenbresias').innerHTML = "Nuevo Tipo de menbresia";
  };
  init();