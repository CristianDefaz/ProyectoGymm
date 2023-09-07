<!DOCTYPE html>
<html lang="es">
<head>
<?php require_once('../html/head.php')  ?>
</head>
<body>
<?php

$factura_id = $_POST['factura_id'];

$mysqli = mysqli_connect("localhost", "root", "", "db_gym_dos");

if (!$mysqli) {
    die("Error en la conexión: " . mysqli_connect_error());
}

// Preparar la consulta SQL con una unión (JOIN) entre las tablas facturas y cliente
$query = "SELECT cliente.cli_email FROM facturas INNER JOIN cliente ON facturas.cli_id = cliente.cliente_id WHERE facturas.factura_id = '$factura_id'";

// Ejecutar la consulta
$result = mysqli_query($mysqli, $query);

// Verificar si la consulta fue exitosa
if ($result) {
    // Obtener el resultado como un arreglo asociativo
    $row = mysqli_fetch_assoc($result);
    
    // Guardar el valor del correo electrónico en una variable
    $cli_email = $row['cli_email'];
    
    // Cerrar la conexión
    
    
    // Ahora puedes usar $cli_email en otras partes de tu código
    echo "El correo electrónico es: " . $cli_email;
} else {
    // Manejar el caso en que la consulta falla
    echo "Error en la consulta: " . mysqli_error($mysqli);
}

// Consulta SQL para realizar el inner join
$query = "SELECT 
c.cli_cedula, 
c.cli_nombre, 
c.cli_apellido, 
c.cli_direccion, 
c.cli_telefono, 
f.fa_fecha, 
f.fa_montol_total, 
m.tipo_menbresia, 
m.tipo_descripcion
FROM 
facturas AS f
INNER JOIN 
cliente AS c ON f.cli_id = c.cliente_id
INNER JOIN 
tipo_menbresia AS m ON f.men_id = m.tipo_id WHERE f.factura_id='$factura_id'";

// Ejecutar la consulta
$result = mysqli_query($mysqli, $query);

// Verificar si la consulta se ejecutó con éxito
if (!$result) {
    die("Error en la consulta: " . mysqli_error($mysqli));
}

// Obtener los datos y guardarlos en variables PHP
while ($row = mysqli_fetch_assoc($result)) {
    $cli_cedula = $row['cli_cedula'];
    $cli_nombre = $row['cli_nombre'];
    $cli_apellido = $row['cli_apellido'];
    $cli_direccion = $row['cli_direccion'];
    $cli_telefono = $row['cli_telefono'];
    $fa_fecha = $row['fa_fecha'];
    $fa_montol_total = $row['fa_montol_total'];
    $tipo_menbresia = $row['tipo_menbresia'];
    $tipo_descripcion = $row['tipo_descripcion'];
    
    // Puedes hacer lo que necesites con estas variables aquí
}

// Cerrar la conexión a la base de datos
mysqli_close($mysqli);

$iva=$fa_montol_total*0.12;
$subtotal=$fa_montol_total-$iva;


require '../../views/includes/PHPMailer.php';
require '../../views/includes/SMTP.php';
require '../../views/includes/Exception.php';

// Define namespaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

// Configuración del servidor SMTP
$mail->isSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Port = "587";
$mail->Username = "kevinsan1835@gmail.com";
$mail->Password = "lmdmngpqdtzslgub";
$subject = "Recibo de EvolutionGym";
    $subject = utf8_decode($subject);
    $mail->Subject = $subject;
//Set sender email
$mail->setFrom("kevinsan1835@gmail.com");
//Enable HTML
	$mail->isHTML(true);
//Attachment
//$mail->addAttachment('img/attachment.png');
//Email body

	$mail->Body = '
    <!DOCTYPE html>
<html>
<head>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .receipt-container {
        margin: 50px auto;
        text-align: center;
        width: 80%;
    }

    .receipt-header {
        border-bottom: 2px solid #333;
        margin-bottom: 20px;
        padding-bottom: 10px;
    }

    .receipt-content {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .receipt-content-left {
        flex-basis: 50%;
        text-align: left;
    }

    .receipt-content-right {
        flex-basis: 50%;
    }

    .receipt-table {
        margin-top: 20px;
        width: 100%;
        border-collapse: collapse;
    }

    .receipt-table th,
    .receipt-table td {
        border: 1px solid #333;
        padding: 8px;
        text-align: left;
    }

    .receipt-table th {
        background-color: #f2f2f2;
    }

    .receipt-summary {
        display: flex;
        justify-content: flex-end;
        margin-top: 20px;
    }

    .receipt-summary-table {
        width: 50%;
    }

    .receipt-summary-table td {
        text-align: right;
    }
    </style>
</head>
<body>
    <div class="receipt-container">
        <div class="receipt-header">
            <h2>Recibo de Compra</h2>
        </div>

        <div class="receipt-content">
            <div class="receipt-content-left">
            <p><strong>Número de Recibo:</strong> <span id="numeroRecibo">'.$factura_id.'</span></p>
            <p><strong>Cédula:</strong> <span id="cedula">'.$cli_cedula.'</span></p>
            <p><strong>Nombre:</strong> <span id="nombre">'.$cli_nombre.'</span></p>
            <p><strong>Apellido:</strong> <span id="apellido">'.$cli_apellido.'</span></p>
            <p><strong>Dirección:</strong> <span id="direccion">'.$cli_direccion.'</span></p>
            <p><strong>Teléfono:</strong> <span id="telefono">'.$cli_telefono.'</span></p>
            </div>
            <div class="receipt-content-right">
            </div>
        </div>

        <table class="receipt-table">
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

        <div class="receipt-summary">
            <table class="receipt-summary-table">
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
</body>
</html>
	';
    //Add recipient
	$mail->addAddress("$cli_email");
    //Finally send email
	if ($mail->send()) {
        echo "Enviado";
    } else {
        echo "Error..!";
    }
   
//Closing smtp connection
	$mail->smtpClose();
   
    ?>
</body>
</html>


