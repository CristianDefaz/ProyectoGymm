<?php
ob_start();
?>
<?php session_start(); ?>
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
                                        <input type="password" class="form-control form-control-user" id="cli_contrasena" name="cli_contrasena" placeholder="Contraseña...">
                                        </div>
                                        <input type="hidden" name="action" value="forgot_password">
                                        <button type="submit" class="btn btn-primary mx-auto col-md-12">Cambiar</button>
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


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cliente_id = $_SESSION['codigo']; // Obtén el ID del cliente desde la sesión
    $nueva_contrasena = $_POST['cli_contrasena'];

    // Realiza el proceso de actualización de contraseña aquí
    if ($cliente_id && $nueva_contrasena) {
        $nueva_contrasena_hashed = password_hash($nueva_contrasena, PASSWORD_DEFAULT);

        // Realiza la actualización en la base de datos
        $conexion = new ClaseConexion();
        $con = $conexion->ProcedimientoConectar();
        $query = "UPDATE cliente SET cli_contrasena = '$nueva_contrasena_hashed' WHERE cliente_id = '$cliente_id'";
        $resultado = $con->query($query);

        if ($resultado) {
            // Contraseña actualizada exitosamente
            header('location: ./login.php'); // Redirecciona a la página de perfil o a donde desees
            exit;
        } else {
            // Ocurrió un error al actualizar la contraseña
            // Puedes mostrar un mensaje de error o hacer algo más
            header('location: ./perfil.php'); // Redirecciona con mensaje de error si es necesario
            exit;
        }
    }
}
?>

<!-- Tu HTML para la página de cambiar contraseña -->

<?php
ob_end_flush();
?>

