//TODO: Archivo de javascript para agregar la funcionalidad a la apgina usuarios.html
function init(){
    $('#Empleados_form').on('submit', (e)=>{
        guardayeditarUsuarios(e);
    })
}

$().ready(() => {
  cargaTablaUsuarios();
  cargaSelectRoles();
});
var cargaTablaUsuarios = () => {
  var html = "";
  $.post(
    "../../controllers/empleados.controller.php?op=todos",{},(listaempleados) => {
      listaempleados = JSON.parse(listaempleados);
      $.each(listaempleados, (index,empleado) => {
        html +=
          `<tr>` +
          `<td>${index + 1}</td>` +
          `<td>${empleado.em_cedula}</td>` +
          `<td>${empleado.em_nombre}</td>` +
          `<td>${empleado.em_apellido}</td>` +
          `<td>${empleado.em_telefono}</td>` +
          `<td>${empleado.em_correo}</td>` +
          `<td>${empleado.rol_nombre}</td>` +
          `<td>` +
          `<button class='btn btn-success' onclick='uno(${empleado.em_id})'>Editar</button>` +
          `<button class='btn btn-danger' onclick='eliminar(${empleado.em_id})'>Eliminar</button>` +
          `</td>` +
          `</tr>`;
      });
      $("#TablaEmpleado").html(html);
    }
  );
};

var cargaSelectRoles = () => {
  var html = ' <option value="0">Seleccione una Opcion</option>';
  $.post("../../controllers/roles.controller.php?op=todos", (listaroles) => {
    listaroles = JSON.parse(listaroles);
    $.each(listaroles, (index, rol) => {
      html += `<option value="${rol.rol_id}">${rol.rol_nombre}</option>`;
    });
    $("#rol_id").html(html);
  });
};

var guardayeditarUsuarios = (e) => {
  e.preventDefault();
var url = "";
var form_Data = new FormData($("#Empleados_form")[0]);
var em_id= document.getElementById("em_id").value;
if (em_id === undefined || em_id === "") {
  url = "../../controllers/empleados.controller.php?op=insertar";
} else {
  url = "../../controllers/empleados.controller.php?op=actualizar";
}
for (var pair of form_Data.entries()) {
  console.log(pair[0]+ ', ' + pair[1]); 
}
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
      Swal.fire('Categoria de Empleados', 'Se guardo con exito','success');
      limpiar();
      cargaTablaUsuarios();
    } else {
      Swal.fire('Categoria de Empleados', 'Ocurrio un error','danger');
    }
  }catch(error){
    Swal.fire('Error', 'No se puede guardar el empleado porque ya se encuentra registrado', 'error');
  }
  },
});
};

var uno = (em_id) => {
  $.post('../../controllers/empleados.controller.php?op=uno', {
    em_id: em_id
  }, (res) => {
      res = JSON.parse(res);
      $('#em_id').val(res.em_id);
      $('#em_nombre').val(res.em_nombre);
      $('#em_apellido').val(res.em_apellido);
      $('#em_telefono').val(res.em_telefono);
      $('#em_cedula').val(res.em_cedula);
      $('#em_correo').val(res.em_correo);
     // $('#em_contrasena').val(res.em_contrasena);
      $('#rol_id').val(res.rol_id);
  })
  document.getElementById('titulModalUsuarios').innerHTML = "Editar Empleado";
  $('#modalUsuarios').modal('show');
};
/*
var eliminar = (em_id) => {
  Swal.fire({
      title: 'Empleado',
      text: "Esta seguro que desea eliminar...???",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Eliminar!!!'
  }).then((result) => {
      if (result.isConfirmed) {
          $.post('../../controllers/empleados.controller.php?op=eliminar', {
              em_id: em_id
          }, (res) => {
              res = JSON.parse(res);
              if (res === 'ok') {
                  Swal.fire('Empleado', 'Se eliminó con éxito', 'success');
                  limpiar();
                  cargaTablaUsuarios();
              }

          })
      }
  })
};
*/
var eliminar = (em_id) => {
  Swal.fire({
    title: 'Empleado',
    text: "¿Está seguro que desea eliminar...???",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    confirmButtonText: 'Eliminar!!!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.post('../../controllers/empleados.controller.php?op=eliminar', {
        em_id: em_id
      }, (res) => {
        try {
          res = JSON.parse(res);
          if (res === 'ok') {
            Swal.fire('Empleado', 'Se eliminó con éxito', 'success');
            limpiar();
            cargaTablaUsuarios();
          } else if (res === 'clientes_registrados') {
            Swal.fire('Error', 'No se puede eliminar el empleado porque ha registrado clientes', 'error');
          } else {
            Swal.fire('Error', 'Hubo un problema al eliminar el empleado', 'error');
          }
        } catch (error) {
          Swal.fire('Error', 'No se puede eliminar el empleado porque ha registrado clientes', 'error');
        }
      }).fail(() => {
        Swal.fire('Error', 'No se pudo conectar al servidor', 'error');
      });
    }
  })
};



var limpiar = () => {
    document.getElementById('em_id').value = '';
    document.getElementById('em_nombre').value = '';
    $('#em_apellido').val('');
    $('#em_cedula').val('');
    $('#em_telefono').val('');
    $('#em_correo').val('');
    $('#em_contrasena').val('');
    $('#rol_id').val('0');
    $('#modalUsuarios').modal('hide');
    document.getElementById('titulModalUsuarios').innerHTML = "Nuevo Empleado";
};
init();