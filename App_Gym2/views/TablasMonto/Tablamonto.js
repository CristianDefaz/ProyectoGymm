$(document).ready(() => {
    cargarTablaFacturas();
});

var cargarTablaFacturas = () => {
    $.post("../../controllers/factura.controller.php?op=todos", {}, (listafacturas) => {
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

var generarTablaFacturas = (listafacturas) => {
    var html = "";
    listafacturas.forEach((factura, index) => {
        html +=
            `<tr>` +
            `<td>${index + 1}</td>` +
            `<td>${factura.cli_cedula} ${factura.cli_nombre} ${factura.cli_apellido}</td>` +
            `<td>${factura.fa_fecha}</td>` +
            `<td>${factura.tipo_menbresia}</td>` +
            `<td>${factura.tipo_costo}</td>` +
            `</tr>`;
    });

    // Agregar validación para mostrar un mensaje si no hay facturas
    if (listafacturas.length === 0) {
        html = `<tr><td colspan="5">No hay facturas disponibles</td></tr>`;
    }

    $("#TablaFactura").html(html);
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


  
 