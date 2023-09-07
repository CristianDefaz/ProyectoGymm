<?php
session_start();
$codigousu = $_SESSION['codigo'];
$cedula= $_SESSION['cedula'];
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$fechanacimiento = $_SESSION['fecha'];
$genero = $_SESSION['genero'];
$altura = $_SESSION['altura'];
$peso = $_SESSION['peso'];
$telefono = $_SESSION['telefono'];
$direccion = $_SESSION['direccion'];
$correo = $_SESSION['correo'];
$contrasena = $_SESSION['contrasena'];
$token = rand(1000,9999);
$_SESSION['token']=$token;


//Include required PHPMailer files
	require '../../views/includes/PHPMailer.php';
	require '../../views/includes/SMTP.php';
	require '../../views/includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer


	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
    //Definir caracteres
$mail->CharSet = 'UTF-8';
//Define smtp host

	$mail->Host = "smtp.gmail.com";
	
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "cristiandefaz191@gmail.com";

    $mail->Password = "comqnmjoxvarhpko";


    //Email subject
    $subject = "Recuperacion de contraseña Evolution Gym";
    $subject = utf8_decode($subject);
    $mail->Subject = $subject;
//Set sender email
$mail->setFrom("cristiandefaz191@gmail.com");
//Enable HTML
	$mail->isHTML(true);
//Attachment
//$mail->addAttachment('img/attachment.png');
//Email body
	$mail->Body = '
	<!doctype html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="description" content="Reset Password Email ">
    <style type="text/css">
        a:hover {text-decoration: underline !important;}
    </style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
    <!--100% body table-->
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: Open Sans, sans-serif;">
        <tr>
            <td>
                <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                    align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
 
						<h2 style="color:rgba(69, 80, 86, 0.7411764705882353); font-weight:500; margin:0;font-size:32px;font-family: Rubik ,sans-serif;">Evolution Gym
						</h2>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="padding:0 35px;">
                                        <h1 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family: Rubik ,sans-serif;">Has solicitado restablecer tu contraseña
										</h1>
										<h3 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family: Rubik ,sans-serif;">'.$nombre.'
										</h3>
                                        
                                        <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                                            A continuación se muestrara el codigo de verificación para restablecer tu contraseña.
                                        </p>
										<span
										style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;">Codigo: '.$token.'</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                            <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">&copy; <strong>Evolution Gym</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--/100% body table-->
</body>

</html>
	';
//Add recipient
	$mail->addAddress("$correo");
//Finally send email
	if ( $mail->send() ) {
		header("location: ./verificartoken.php");
       
	}else{
		echo "Error..!";
        $contador++;

	}
//Closing smtp connection
	$mail->smtpClose();
  
