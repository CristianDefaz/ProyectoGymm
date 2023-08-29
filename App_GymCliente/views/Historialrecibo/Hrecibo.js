$(document).ready(() => {
  cargarTablaFacturas();
});

var cargarTablaFacturas = () => {
  $.post("../../controllers/factura.controller.php?op=todos1", {}, (listafacturas) => {
      listafacturas = JSON.parse(listafacturas);
      generarTablaFacturas(listafacturas);
      calcularSumaMontos(listafacturas);
  });
};

var filtrarPorFecha = () => {
  var fechaDesde = $("#fechaDesdeInput").val();
  var fechaHasta = $("#fechaHastaInput").val();

  $.post(
      "../../controllers/factura.controller.php?op=filtrarPorFecha",
      { fechaDesde: fechaDesde, fechaHasta: fechaHasta },
      (listafacturas) => {
          listafacturas = JSON.parse(listafacturas);
          generarTablaFacturas(listafacturas);
          calcularSumaMontos(listafacturas);
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



var generarTablaFacturas = (listafacturas) => {
  var html = "";
  
  // Verificar si la lista de facturas está vacía
  if (listafacturas.length === 0) {
    html = `<tr><td colspan="8">No hay facturas disponibles</td></tr>`;
  } else {
    listafacturas.forEach((factura, index) => {
      html +=
      `<tr>` +
      `<td>${index + 1}</td>` +
      `<td>${factura.cli_cedula} ${factura.cli_nombre} ${factura.cli_apellido}</td>` +
      `<td>${factura.fa_fecha}</td>` +
      `<td>${factura.tipo_menbresia}</td>` +  // Corregido el nombre de la propiedad
      `<td>${factura.tipo_costo}</td>` +
      `<td><img style='width:100px; cursor:pointer' src='${factura.imagen}' onclick='mostrarModal("${factura.imagen}")'></td>` + // Agregamos el evento onclick para mostrar el modal
      `<td>${factura.estado}</td>` +
      `<td>` +
      `<button class='btn btn-danger' onclick='eliminar(${factura.id_recibo})'>Eliminar</button>` +
      `</td>` +
      `</tr>`;
    });
  }

  $("#TablaFactura").html(html);
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
          cargarTablaFacturas ();
        }
      })
    }
  })
};




var calcularSumaMontos = (listafacturas) => {
  var sumaMontos = 0;
  listafacturas.forEach((factura) => {
      // Reemplaza factura.tipo_costo por la propiedad correcta que contenga los montos
      sumaMontos += parseFloat(factura.tipo_costo);
  });
  console.log("Suma de montos:", sumaMontos);
  document.getElementById("sumaMontosInput").value = sumaMontos;
};

var generarPDF = (sumaMontos, fechaDesde, fechaHasta) => {
  // Enviar solicitud al script PHP para generar el PDF utilizando Ajax
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "Imprimir.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
          // Aquí podrías mostrar una notificación o redireccionar, dependiendo de tu necesidad
      }
  };
  
  // Enviamos los datos de sumaMontos, fechaDesde y fechaHasta al script PHP
  var data = "sumaMontos=" + encodeURIComponent(sumaMontos) +
             "&fechaDesde=" + encodeURIComponent(fechaDesde) +
             "&fechaHasta=" + encodeURIComponent(fechaHasta);
  xhr.send(data);
};




