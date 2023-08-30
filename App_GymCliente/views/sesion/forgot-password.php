

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Recuperar Contraseña</title>

    <!-- Custom fonts for this template-->
    <link href="../../Plog/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../Plog/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image">
                            <img src="../../public/img/team-1.jpg" >
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Olvidaste tu Contraseña</h1>
                                        <p class="mb-4">Restaura tu contraseña</p>
                                    </div>
                                    <form class="user"  method="post" >
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="cli_email" name="cli_email" aria-describedby="emailHelp" placeholder="Ingresa tu email...." required>
                                        </div>
                                      
                                        <input type="hidden" name="action" value="forgot_password">
                                        <button class="btn btn-primary btn-user btn-block" type="submit">
                                            Recuperar contraseña
                                        </button>
                                    </form>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../Plog/vendor/jquery/jquery.min.js"></script>
    <script src="../../Plog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../Plog/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../Plog/js/sb-admin-2.min.js"></script>


    
</body>

</html>

<?php
require_once '../../config/config.php';
require_once '../../config/sesiones.php';

// Definir la función fuera de la clase
function ConsultaRecuperarPass($correo) {
    $con = new ClaseConexion();
    $con = $con->ProcedimientoConectar();
    $query = "SELECT * FROM cliente WHERE cli_email = '$correo'";
    $result = $con->query($query);

    return $result;
}

// Tu código de conexión a la base de datos y otras importaciones

if ($_POST) {
    $correo = $_POST['cli_email'];
    $result_cor = ConsultaRecuperarPass($correo); // Llamar a la función sin usar $clase_clave

    if ($result_cor->num_rows > 0) {
        $row = mysqli_fetch_array($result_cor);

        $codigousu = $row['cliente_id'];
        $cedula = $row['cli_cedula'];
        $nombre = $row['cli_nombre'];
        $apellido = $row['cli_apellido'];
        $fechanacimiento = $row['cli_fecha_nacimiento'];
        $genero = $row['cli_genero'];
        $altura = $row['cli_altura'];
        $peso = $row['cli_peso'];
        $telefono = $row['cli_telefono'];
        $direccion = $row['cli_direccion'];
        $correo = $row['cli_email'];
        $contrasena = $row['cli_contrasena'];

        // Establecer variables de sesión
        $_SESSION['codigo'] = $codigousu;
        $_SESSION['cedula'] = $cedula;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['apellido'] = $apellido;
        $_SESSION['fecha'] = $fechanacimiento;
        $_SESSION['genero'] = $genero;
        $_SESSION['altura'] = $altura;
        $_SESSION['peso'] = $peso;
        $_SESSION['telefono'] = $telefono;
        $_SESSION['direccion'] = $direccion;
        $_SESSION['correo'] = $correo;
        $_SESSION['contrasena'] = $contrasena;
    

        // Redireccionar a la página de envío de correo para recuperación
        header('location: ./emailenvio.php');
        exit; // Importante: asegúrate de salir del script
    } else {
        // El correo no existe en la base de datos
        // Puedes mostrar un mensaje de error o hacer algo más
        // Redireccionar a la página de inicio de sesión, por ejemplo
        header('location: ./login.php');
        exit; // Asegúrate de salir del script
    }
}
?>