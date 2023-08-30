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
                                    <h4 class="text-center mb-4">Verificación para recuperacion de contraseña</h4>
                                    <h6 class="text-center mb-4">Se ha enviado un mensaje al siguiente correo: <?php echo $_SESSION['correo']; ?></h6>
                                    <form class="user"  method="post" >
                                        <div class="form-group">
                                            <label><strong>Ingrese el codigo de verificación</strong></label>
                                            <input type="text" placeholder="Codigo" class="form-control form-control-user" name="veri" required>
                                            <div id="mensaje_contrasena"></div>
                                        </div>
                                  
                                        <button type="submit" id="btnGuardar"  class="btn btn-primary btn-user btn-block">Verificar</button>
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
$codig = $_SESSION['token'];
if (!empty($_POST)) {
    $verifica = $_POST['veri'];
    if ($verifica == $codig) {
        - //header('location: ../code/php/verificacion/add_user_new.php');
        header('location: ./cambiarcontrasena.php');
    } else { ?>
        <script>
             const messageElement = document.getElementById('mensaje_contrasena');
            let message = '';
             message += 'Codigo Incorrecto.<br>';   
             messageElement.innerHTML = message === '' ? '' : '<div style="color:red">' + message + '</div>';       
        </script>
<?php }
}