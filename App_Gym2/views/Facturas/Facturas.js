function init() {
  $('#Facturas_form').on('submit', (e) => {
    guardayeditarFactura(e);

  })
}
$().ready(() => {
  cargartablaF();
  cargaselect();

});
var cargartablaF = () => {
  var html = "";
  var rolId = document.getElementById('rolId').value; // Obtén el valor del campo de texto oculto

  $.post(
    "../../controllers/factura.controller.php?op=todos", {}, (listafacturas) => {
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
          `<td>`;
        
        // Agregar el botón "Eliminar" solo si el rolId es igual a 1
        if (rolId === "1") {
          html += `<button class='btn btn-danger' onclick='eliminar(${facturas.factura_id})'>Eliminar</button>`;
        }
        
        html +=
          `<button class='btn btn-success' onclick='uno(${facturas.factura_id})'>Editar</button>` +
          `<button class="btn btn-dark" onclick='guardarDatos(${facturas.factura_id})'>Enviar recibo</button>` +
          `<a class="btn btn-info" href="imprimir.php?id=${facturas.factura_id}" target="_blank">Imprimir Factura</a>` +
          `</td>` +
          `</tr>`;
      });
      $("#TablaFactura").html(html);
    }
  );
};

var cargaselect = () => {
  var htmlcliente = '<option value="0">Seleccione una Opción</option>';
  var htmlmembresia = '<option value="0">Seleccione una Opción</option>';
  var htmlmonto = '<option value="0">Seleccione una Opción</option>';
  // Corregir la URL de la solicitud POST
  $.post("../../controllers/membresia.controller.php?op=todos", {}, (listaclientes) => {
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

  e.preventDefault();
  var url = "";

  var factura_id = document.getElementById("factura_id").value;
  var form_Data = new FormData($("#Facturas_form")[0]);
  if (factura_id === undefined || factura_id === "") {
    url = "../../controllers/factura.controller.php?op=insertar";
  } else {
    url = "../../controllers/factura.controller.php?op=actualizar";
    form_Data.append("factura_id", factura_id)
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
      } else {
        Swal.fire('Factura', 'Ocurrio un error', 'danger');
      }
    },
  });
};

var uno = async (factura_id) => {
  await $.post('../../controllers/factura.controller.php?op=uno', {
    factura_id: factura_id
  }, async (res) => {
    res = JSON.parse(res);
    $('#factura_id').val(res.factura_id);
    await $('#cli_id').val(res.cli_id);
    $('#fa_fecha').val(res.fa_fecha);
    await $('#men_id').val(res.men_id);
  })
  document.getElementById('tituloModalFactura').innerHTML = "Editar Factura";
  $('#modalFactura').modal('show');
  await calcularvalor()

};


var eliminar = (factura_id) => {
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
        factura_id: factura_id
      }, (res) => {
        res = JSON.parse(res);
        if (res === 'ok') {
          Swal.fire('Factura', 'Se eliminó con éxito', 'success');
          limpiar();
          cargartablaF();
        }
      })
    }
  })
};

var limpiar = () => {
  $('#factura_id').val('');
  $('#cli_id').val('');
  $('#fa_fecha').val('');
  $('#men_id').val('');
  $('#fa_montol_total').val('');


  $('#modalFactura').modal('hide');
  document.getElementById('tituloModalFactura').innerHTML = "Nueva Factura";
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