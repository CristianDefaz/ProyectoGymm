<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="../../Plog/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../Plog/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../public/css/estilos.css" rel="stylesheet" type="text/css">
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
                        <div class="col-lg-6 d-none d-lg-block">
                            <img src="../../public/img/team-1.jpg" >
                            </div>

                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                                    </div>
                                    <form class="user" action="../../controllers/cliente.controller.php?op=login" method="post">
                                    <?php
                                        if (isset($_GET['op'])) {
                                            switch ($_GET['op']) {  //TODO: Clausula de desicion para obtener variable tipo GET
                                                case '1':
                                        ?>
                                                    <div class="form-group">
                                                        <div class="alert alert-danger">
                                                            El usuario o la contrasenia son incorrectos
                                                        </div>
                                                    </div>
                                                <?php
                                                    break;
                                                case '2':
                                                ?>
                                                    <div class="form-group">
                                                        <div class="alert alert-danger">
                                                            Por favor, llene las cajas de texto
                                                        </div>
                                                    </div>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="cli_email" name="cli_email" aria-describedby="emailHelp" placeholder="Correo electronico...">
                                        </div>
                              
                                        <div class="form-group">
                                            <div class="password-container">
                                            <input type="password" class="form-control form-control-user" id="cli_contrasena" name="cli_contrasena" placeholder="Contraseña...">
                                                <img src="https://static.vecteezy.com/system/resources/previews/002/101/686/large_2x/eye-icon-look-and-vision-symbol-eye-logo-design-inspiration-free-vector.jpg" alt="Imagen de contraseña" id="togglePassword">
                                            </div>
                                            <div id="mensaje_contrasena"></div>
                                        </div>


                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Iniciar
                                        </button>
                                        <hr>          
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="./forgot-password.php">recuperar contraseña?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="./register.php">Crear cuenta!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="../../index.php">Menu Principal!</a>
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


    <script>
            const passwordInput2 = document.getElementById('cli_contrasena');
            const togglePassword = document.getElementById('togglePassword');
            const messageElement2 = document.getElementById('mensaje_contrasena');

            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                togglePassword.textContent = type === 'password' ? 'Mostrar contraseña' : 'Ocultar contraseña';
            });


            passwordInput.addEventListener('input', function() {
                // Código de validación de contraseña (como se mostró en la respuesta anterior)
            });
        </script>

        <script>
            const passwordInput = document.getElementById('cli_contrasena');
            const messageElement = document.getElementById('mensaje_contrasena');

            passwordInput.addEventListener('input', function() {
                const password = passwordInput.value;
                const regexLowerCase = /[a-z]/;
                const regexUpperCase = /[A-Z]/;
                const regexNumbers = /[0-9]/;
                const regexSpecialChars = /[!@#$%^&*()_+[\]{};':"\\|,.<>/?-]/;

                let message = '';
                if (password.length > 1) {
                    if (!regexLowerCase.test(password) || !regexUpperCase.test(password) || !regexNumbers.test(password) ||
                        !regexSpecialChars.test(password) || password.length < 8) {
                        //message += 'La contraseña debe tener minimo 8 caracteres, un caracter especial y una letra mayúscula.<br>';
                    }
                } else if (password.length < 1) {
                    message += '';
                }



                messageElement.innerHTML = message === '' ? '' : '<div style="color:red">' + message + '</div>';
            });
        </script>

</body>

</html>