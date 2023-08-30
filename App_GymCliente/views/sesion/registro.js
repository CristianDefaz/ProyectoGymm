//TODO: Archivo de javascript para agregar la funcionalidad 
function init() {
  $('#Registro_form').on('submit', (e) => {
    guardayeditarcliente(e);
  })
}

var guardayeditarcliente = (e) => {
  e.preventDefault();
  var url = "";
  var cliente_id = document.getElementById("Registro_form").value;
  if (cliente_id === undefined || cliente_id === "") {
    url = "../../controllers/cliente.controller.php?op=insertar";
  } 
  var form_Data = new FormData($("#Registro_form")[0]);
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
        Swal.fire('Categoria de Clientes', 'Se guardo con exito', 'success');
        limpiar();
      } else {
        Swal.fire('Categoria de Clientes', 'Ocurrio un error', 'danger');
      }
    },
  });
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
    $('#cli_email').val('');
    $('#cli_contrasena').val('');
  };

  init();