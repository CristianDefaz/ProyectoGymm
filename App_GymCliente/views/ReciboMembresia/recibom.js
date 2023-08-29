function init() {
    $('#Recibo_form').on('submit', (e) => {
      guardayeditarFactura(e);
    })
  }

  
  $().ready(() => {
    cargartablaF();
    cargaselect();
    verificarMembresia();
  });
  
  var cargartablaF = () => {
    var html = "";
  
    $.post(
      "../../controllers/factura.controller.php?op=todos",
      {},
      (listafacturas) => {
        listafacturas = JSON.parse(listafacturas);
        $.each(listafacturas, (index, facturas) => {
          html +=
            `<tr>` +
            `<td>${index + 1}</td>` +
            `<td>${facturas.cli_cedula} - 
            ${facturas.cli_nombre}
            ${facturas.cli_apellido}</td>` +
            `<td>${facturas.fa_fecha}</td>` +
            `<td>${facturas.tipo_menbresia}</td>` +
            `<td>${facturas.tipo_costo}</td>` +
            `<td><img style='width:100px; cursor:pointer' src='${facturas.imagen}' onclick='mostrarModal("${facturas.imagen}")'></td>` + // Agregamos el evento onclick para mostrar el modal
            `<td>${facturas.estado}</td>` +
            `<td>` +
            `<button class='btn btn-success' onclick='uno(${facturas.id_recibo})'>Editar</button>` +
            `<button class='btn btn-danger' onclick='eliminar(${facturas.id_recibo})'>Eliminar</button>` +
            `</td>` +
            `</tr>`;
        });
        $("#TablaFactura").html(html);
      }
    );
  };
  
  // Función para mostrar el modal con la imagen
  function mostrarModal(imageSrc) {
    var modal = document.getElementById("imageModal");
    var modalImage = document.getElementById("modalImage");
    modalImage.src = imageSrc;
    modal.style.display = "block";
  
    var closeModal = document.getElementsByClassName("close")[0];
    closeModal.onclick = function () {
      modal.style.display = "none";
    };
  
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    };
  }
  
  function cerrarModal() {
    var modal = document.getElementById("imageModal");
    modal.style.display = "none";
}


function verificarMembresia() {
  // Hacer una solicitud AJAX al servidor para obtener la información de la membresía
  // Supongamos que estás usando jQuery para hacer la solicitud AJAX
  $.ajax({
      url: '../../controllers/membresia.controller.php?op=todos',  // Reemplaza con la URL correcta
      type: 'GET',
      dataType: 'json',
      success: function(data) {
          if (data.length > 0) {
              document.getElementById("comprarBtn").disabled = true;
              Swal.fire('Informacion', 'Actualmente tienen una membresia activa');
              console.log("Cliente tiene una membresía activa. Botón bloqueado.");
          } else {
              document.getElementById("comprarBtn").disabled = false;
              console.log("Cliente no tiene membresía activa. Botón habilitado.");
          }
      },
      error: function() {
          console.error("Error al obtener los datos de la membresía.");
      }
  });
  $.ajax({
    url: '../../controllers/factura.controller.php?op=todos',  // Reemplaza con la URL correcta
    type: 'GET',
    dataType: 'json',
    success: function(data) {
        if (data.length > 0) {
            document.getElementById("comprarBtn").disabled = true;
            Swal.fire('Informacion', 'Actualmente tiene ya una compra "Pendiente" esperar activacion');
            console.log("Cliente tiene una compra hecha. Botón bloqueado.");
        } 
    },
    error: function() {
        console.error("Error al obtener los datos de la membresía.");
    }
});
}

  
  var cargaselect = () => {
    var htmlcliente = '<option value="0">Seleccione una Opción</option>';
    var htmlmembresia = '<option value="0">Seleccione una Opción</option>';
    var htmlmonto = '<option value="0">Seleccione una Opción</option>';
    // Corregir la URL de la solicitud POST
    $.post("../../controllers/cliente.controller.php?op=todos", {}, (listaclientes) => {
      listaclientes = JSON.parse(listaclientes);
      let htmlcliente = "";
      $.each(listaclientes, (index, cedula) => {
          htmlcliente += `<option value="${cedula.cliente_id}">${cedula.cli_cedula} - ${cedula.cli_nombre} ${cedula.cli_apellido}</option>`;
      });
      $("#cli_id").html(htmlcliente);
  });
  
    $.post("../../controllers/tipo.membresia.controller.php?op=todos", (listestado) => {
      listestado = JSON.parse(listestado);
      $.each(listestado, (index, estado) => {
        htmlmembresia += `<option value="${estado.tipo_id}">${estado.tipo_menbresia}</option>`;
      });
      $("#men_id").html(htmlmembresia);
    });
    $.post("../../controllers/tipo.membresia.controller.php?op=todos", (listamonto) => {
      listamonto = JSON.parse(listamonto);
      $.each(listamonto, (index, monto) => {
        htmlmonto += `<option value="${monto.tipo_id}">${monto.tipo_costo}</option>`;
      });
      $("#fa_montol_total").html(htmlmonto);
    });
  
  
  };
  
  var guardayeditarFactura = (e) => {
    console.log("Formulario enviado");
    e.preventDefault();
    var url = "";
    var id_recibo = document.getElementById("id_recibo").value;
    if (id_recibo === undefined || id_recibo === "") {
      url = "../../controllers/factura.controller.php?op=insertar";
    }else {
      url = "../../controllers/factura.controller.php?op=actualizar";
    }
    var form_Data = new FormData($("#Recibo_form")[0]);
    for (let pair of form_Data.entries()) {
      console.log(pair[0], pair[1]);
    }
    $.ajax({
      url: url,
      type: "POST",
      data: form_Data,
      processData: false,
      contentType: false,
      cache: false,
      success: (respuesta) => {
        console.log(respuesta)
        respuesta = JSON.parse(respuesta);
        if (respuesta == "ok") {
          Swal.fire('Factura', 'Se guardo con exito', 'success');
          limpiar();
          cargartablaF();
          verificarMembresia();
        } else {
          Swal.fire('Factura', 'Ocurrio un error', 'danger');
        }
      },
    });
  };
  



  var uno = async (id_recibo) => {
    await $.post('../../controllers/factura.controller.php?op=uno', {
      id_recibo: id_recibo
    }, async (res) => {
      res = JSON.parse(res);
      $('#id_recibo').val(res.id_recibo);
      await $('#cli_id').val(res.cli_id);
      $('#fa_fecha').val(res.fa_fecha);
      await $('#men_id').val(res.men_id);
    })
    document.getElementById('tituloModalFactura').innerHTML = "Editar recibo compra";
    $('#modalfactura').modal('show');
    await calcularvalor()
  
  };
  
  
  var eliminar = (id_recibo) => {
    Swal.fire({
      title: 'Factura',
      text: "Esta seguro que desea eliminar...???",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Eliminar!!!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.post('../../controllers/factura.controller.php?op=eliminar', {
          id_recibo: id_recibo
        }, (res) => {
          res = JSON.parse(res);
          if (res === 'ok') {
            Swal.fire('Factura', 'Se eliminó con éxito', 'success');
            limpiar();
            cargartablaF();
            verificarMembresia();
          }
        })
      }
    })
  };
  
  var limpiar = () => {
    $('#id_recibo').val('');
    $('#cli_id').val('');
    $('#fa_fecha').val('');
    $('#men_id').val('');
    $('#fa_montol_total').val('');
  
  
    $('#modalfactura').modal('hide');
    document.getElementById('tituloModalFactura').innerHTML = "Nueva recibo";
  };
  
  var calcularvalor = async () => {
    var combo = document.getElementById("men_id");
    var idTipoMen = combo.options[combo.selectedIndex].value;
    //var valortextoseparado= textoselecionado.split("-")
    //document.getElementById("fa_montol_total").value = parseInt(valortextoseparado[1]) * parseInt(valortextoseparado[2])
  
    await $.post("../../controllers/tipo.membresia.controller.php?op=consultavalor", { idTipoMen: idTipoMen }, (res) => {
      res = JSON.parse(res)
      document.getElementById("fa_montol_total").value = res.costo
    })
  
  }
  
  var ImprimirJs = async (factura_id) => {
    await $.post('../../controllers/factura.controller.php?op=uno', {
      factura_id: factura_id
    }, async (res) => {
      res = JSON.parse(res);
      console.log(res);
      document.getElementById('DatosCliente').innerHTML = `<h1>Factura #</h1>
  
  <p><b>Cédula: </b> ${res.cli_cedula}</p> <br>
  <p><b>Nombre: </b> ${res.cli_nombre}</p> <br>
  <p><b>Apellido: </b> ${res.cli_apellido}</p> <br>
  <p><b>Direccion: </b> ${res.cli_direccion}</p> <br>
  <p><b>Telefono: </b> ${res.cli_telefono}</p> <br>
  `
  document.getElementById('Fecha').innerHTML = `<h1></h1>
  
  <p><b>Fecha: </b> ${res.fa_fecha}</p> <br>
  `
  document.getElementById('Membresia').innerHTML = `<h1></h1>
  
  <p><b>Tipo: </b> ${res.tipo_menbresia}</p> <br>
  <p><b>Detalle: </b> ${res.tipo_descripcion}</p> <br>
  
  `
  document.getElementById('ValoraPagar').innerHTML = `<h1></h1>
  
  <p><b>ValorTotal: </b> ${res.tipo_costo}</p> <br>
  `
        ;
  
    })
    $('#modalFacturaImprimir').modal('show');
    await calcularvalor()
    var contenidoImprimir = document.getElementById('modalFacturaImprimir').innerHTML;
    var contenidoOriginal = document.body.innerHTML;
    document.body.innerHTML = contenidoImprimir;
    window.print()
    document.body.innerHTML = contenidoOriginal;
    $('#modalFacturaImprimir').modal('hide');
  }
  
  init();