//TODO: Archivo de javascript para agregar la funcionalidad 
function init() {
  $('#Clientes_form').on('submit', (e) => {
    guardayeditarcliente(e);
  })
}

$().ready(() => {
  tablacliente();
});
var tablacliente = () => {
  var html = "";
  $.post(
    "../../controllers/cliente.controller.php?op=todos", {}, (listacliente) => {
      listacliente = JSON.parse(listacliente);
      $.each(listacliente, (index, cliente) => {
        html +=
          `<tr>` +
          `<td>${index + 1}</td>` +
          `<td>${cliente.cli_cedula}</td>` +
          `<td>${cliente.cli_nombre}</td>` +
          `<td>${cliente.cli_apellido}</td>` +
          `<td>${cliente.cli_fecha_nacimiento}</td>` +
          `<td>${cliente.cli_genero}</td>` +
          `<td>${cliente.cli_altura}</td>` +
          `<td>${cliente.cli_peso}</td>` +
          `<td>${cliente.cli_telefono}</td>` +
          `<td>${cliente.cli_direccion}</td>` +
          `<td>${cliente.cli_email}</td>` +
          `<td>` +
          `<button id="editarBtn" class='btn btn-success' onclick='uno(${cliente.cliente_id})'>Editar</button>` +
          `<button id="eliminarBtn" class='btn btn-danger' onclick='eliminar(${cliente.cliente_id})'>Eliminar</button>` +
          `</td>` +
          `</tr>`;
      });
      $("#TablaCliente").html(html);
    }
  );
};

var guardayeditarcliente = (e) => {
  e.preventDefault();
  var url = "";
  var cliente_id = document.getElementById("cliente_id").value;
  if (cliente_id === undefined || cliente_id === "") {
    url = "../../controllers/cliente.controller.php?op=insertar";
  } else {
    url = "../../controllers/cliente.controller.php?op=actualizar";
  }
  var form_Data = new FormData($("#Clientes_form")[0]);
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
        Swal.fire('Categoria de Clientes', 'Se guardo con exito', 'success');
        limpiar();
        tablacliente();
      } else {
        Swal.fire('Categoria de Clientes', 'Ocurrio un error', 'danger');
      }
    }catch(error){
      Swal.fire('Error', 'No se puede guardar este cliente, ya se encuentra registrado', 'error');
    }
    },
  });
};




var uno = (cliente_id) => {
  $.post('../../controllers/cliente.controller.php?op=uno', {
    cliente_id: cliente_id
  }, (res) => {
    res = JSON.parse(res);
    $('#cliente_id').val(res.cliente_id);
    $('#cli_cedula').val(res.cli_cedula);
    $('#cli_nombre').val(res.cli_nombre);
    $('#cli_apellido').val(res.cli_apellido);
    $('#cli_fecha_nacimiento').val(res.cli_fecha_nacimiento);
    $('#cli_genero').val(res.cli_genero);
    $('#cli_altura').val(res.cli_altura);
    $('#cli_peso').val(res.cli_peso);
    $('#cli_telefono').val(res.cli_telefono);
    $('#cli_direccion').val(res.cli_direccion);
    $('#cli_correo').val(res.cli_email);
  })
  document.getElementById('tituloModalCliente').innerHTML = "Editar Cliente";
  $('#modalCliente').modal('show');
};
/*var eliminar = (cliente_id) => {
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
        cliente_id: cliente_id
      }, (res) => {
        res = JSON.parse(res);
        if (res === 'ok') {
          Swal.fire('Cliente', 'Se eliminó con éxito', 'success');
          limpiar();
          tablacliente();
        }
       
      })
    }
  })
};*/
var eliminar = (cliente_id) => {
  Swal.fire({
    title: 'Cliente',
    text: "¿Está seguro que desea eliminar...???",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    confirmButtonText: 'Eliminar!!!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.post('../../controllers/cliente.controller.php?op=eliminar', {
        cliente_id: cliente_id
      }, (res) => {
        try {
          res = JSON.parse(res);
          if (res === 'ok') {
            Swal.fire('Cliente', 'Se eliminó con éxito', 'success');
            limpiar();
            tablacliente();
          } else {
            Swal.fire('Error', 'Hubo un problema al eliminar el cliente', 'error');
          }
        } catch (error) {
          Swal.fire('Error', 'No se puede eliminar este cliente, tiene menbresia activa', 'error');
        }
      }).fail(() => {
        Swal.fire('Error', 'No se pudo conectar al servidor', 'error');
      });
    }
  })
};


var limpiar = () => {
  $('#cliente_id').val('');
  $('#cli_cedula').val('');
  $('#cli_nombre').val('');
  $('#cli_apellido').val('');
  $('#cli_fecha_nacimiento').val('');
  $('#cli_genero').val('');
  $('#cli_altura').val('');
  $('#cli_peso').val('');
  $('#cli_telefono').val('');
  $('#cli_direccion').val('');
  $('#cli_correo').val('');
  $('#cli_contrasena').val('');
  $('#modalCliente').modal('hide');
  document.getElementById('tituloModalCliente').innerHTML = "Nuevo Cliente";
};
init();
