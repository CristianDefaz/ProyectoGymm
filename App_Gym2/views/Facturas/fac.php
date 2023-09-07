<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibo de Compra</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
   
</head>
<body>
	<div class="container mt-5">
        <h2 class="text-center">Recibo de Compra</h2>
        <br>
       
        <div class="row">
            <div class="col-md-6">
                <p><strong>Número de Recibo:</strong> <span id="numeroRecibo">'.$factura_id.'</span></p>
                <p><strong>Cédula:</strong> <span id="cedula">'.$cli_cedula.'</span></p>
                <p><strong>Nombre:</strong> <span id="nombre">'.$cli_nombre.'</span></p>
                <p><strong>Apellido:</strong> <span id="apellido">'.$cli_apellido.'</span></p>
                <p><strong>Dirección:</strong> <span id="direccion">'.$cli_direccion.'</span></p>
                <p><strong>Teléfono:</strong> <span id="telefono">'.$cli_telefono.'</span></p>
            </div>
            <div class="col-md-6">
                <p><strong>Fecha:</strong> <span id="fecha">'.$fa_fecha.'</span></p>
            </div>
        </div>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Detalle</th>
                    <th>Valor de la Membresía</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><span id="detalle">'.$tipo_menbresia.'</span></td>
                    <td><span id="valorMembresia">'.$subtotal.'</span></td>
                </tr>
            </tbody>
        </table>
        <div class="row justify-content-end">
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <td><strong>Subtotal:</strong></td>
                        <td><span id="subtotal">'.$subtotal.'</span></td>
                    </tr>
                    <tr>
                        <td><strong>IVA (12%):</strong></td>
                        <td><span id="iva">'.$iva.'</span></td>
                    </tr>
                    <tr>
                        <td><strong>Total:</strong></td>
                        <td><span id="total">'.$fa_montol_total.'</span></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>