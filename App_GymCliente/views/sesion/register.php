<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrar Clientes </title>

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

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crear Cuenta!</h1>
                            </div>

                            <form id="Registro_form">
                                <div class="modal-body">
                                    <input type="hidden" name="cliente_id" id="cliente_id">

                                    <div class="form-group">
                                        <label for="cli_cedula" class="control-label">Cedula</label>
                                        <input type="text" name="cli_cedula" id="cli_cedula" class="form-control" required>
                                        <small id="cedulaError" class="text-danger"></small>
                                    </div>

                                    <div class="form-group">
                                    <label for="cli_nombre" class="control-label">Nombres</label>
                                    <input type="text" name="cli_nombre" id="cli_nombre" class="form-control"  required>
                                    </div>

                                    <div class="form-group">
                                    <label for="cli_apellido" class="control-label">Apellidos</label>
                                        <input type="text" name="cli_apellido" id="cli_apellido" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                    <label for="cli_fecha_nacimiento" class="control-label">Fecha nacimiento</label>
                                        <input type="date" name="cli_fecha_nacimiento" id="cli_fecha_nacimiento" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                    <label for="cli_genero" class="control-label">Género</label>
                                    <select name="cli_genero" id="cli_genero" class="form-control" required>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                                    </div>

                                    <div class="form-group">
                                    <label for="cli_altura" class="control-label">Altura (Metros)</label>
                                        <input type="text" name="cli_altura" id="cli_altura" class="form-control" required>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label for="cli_peso" class="control-label">Peso (KG)</label>
                                        <input type="text" name="cli_peso" id="cli_peso" class="form-control" pattern="[0-9]+(\.[0-9]+)?" minlength="1" maxlength="10" required>
                                    </div>

                                    <div class="form-group">
                                    <label for="cli_telefono" class="control-label">Telefono</label>
                                        <input type="text" name="cli_telefono" id="cli_telefono" class="form-control" numeros:  pattern="[0-9]+" minlength="10" maxlength="10"required>
                                    </div>

                                    <div class="form-group">
                                    <label for="cli_direccion" class="control-label">Direccion</label>
                                        <input type="text" name="cli_direccion" id="cli_direccion" class="form-control" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}"  maxlength="40"required>
                                    </div>       
                                    
                                    <div class="form-group">
                                        <label for="cli_email" class="control-label">Correo</label>
                                        <input type="email" name="cli_email" id="cli_email" class="form-control" required>
                                        <div id="mensaje" class="text-danger"></div>
                                    </div>

                            <div class="form-group">
                                <label for="cli_contrasena" class="control-label">Contraseña</label>
                                <div class="password-container">
                                    <input type="password" name="cli_contrasena" id="cli_contrasena" class="form-control" required>
                                    <img src="https://static.vecteezy.com/system/resources/previews/002/101/686/large_2x/eye-icon-look-and-vision-symbol-eye-logo-design-inspiration-free-vector.jpg" alt="Imagen de contraseña" id="togglePassword">
                                </div>
                                <div id="mensaje_contrasena"></div>
                            </div>
                            <input type="hidden" name="id_empleado" id="id_empleado" value="60" readonly required>
                                </div>
                                    <div class="modal-footer">
                                    <button type="submit"   class="btn btn-primary" id="btnGuardar" disabled>Guardar</button>
                                    
                                    </div>
                                </form>

                            <hr>
                       
                            <div class="text-center">
                                <a class="small" href="./login.php">Ya tiene Cuenta? Ingrese!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="../../Plog/vendor/jquery/jquery.min.js"></script>
    <script src="../../Plog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../Plog/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../Plog/js/sb-admin-2.min.js"></script>


    <script src="./registro.js"></script>

    

<script>
    $('#cli_email').on('input', function() {
        const email = $(this).val();
        const mensajeElement = $('#mensaje');

        $.ajax({
            url: "../../controllers/cliente.controller.php?op=todos1",
            success: function(response) {
                console.log(response);
                try {
                    const clientes = JSON.parse(response);

                    if (Array.isArray(clientes)) {
                        const emailEnUso = clientes.some(cliente => cliente.cli_email === email);
                        if (emailEnUso) {
                            mensajeElement.html('El correo está en uso.');
                            btnGuardar.disabled = true;
                        } else {
                            mensajeElement.html('');
                            btnGuardar.disabled = false;
                        }
                    } else {
                        mensajeElement.html('Respuesta del servidor no es un array válido.');
                    }
                } catch (error) {
                    console.error('Error al analizar la respuesta JSON:', error);
                    mensajeElement.html('Error en la solicitud.');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error en la solicitud AJAX:', error);
                mensajeElement.html('Error en la solicitud.');
            }
        });
    });
</script>

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
                        message += 'La contraseña debe tener minimo 8 caracteres, un caracter especial y una letra mayúscula.<br>';
                    }
                } else if (password.length < 1) {
                    message += '';
                }



                messageElement.innerHTML = message === '' ? '' : '<div style="color:red">' + message + '</div>';
            });
        </script>

    <script>

/*-------------------------------------------------------------solo letras------------------------------------*/
// Función para bloquear la entrada de números en un campo de texto
function blockNumbersInput(inputElement) {
  inputElement.addEventListener('keydown', (event) => {
    // Obtener el código de la tecla pulsada
    const keyCode = event.which || event.keyCode;

    // Permitir las teclas de control (por ejemplo, las teclas de flecha, retroceso, etc.)
    if (event.ctrlKey || event.altKey || event.metaKey || keyCode === 8 || keyCode === 9) {
      return;
    }

    // Bloquear la entrada si la tecla es un número (códigos de teclas del 0 al 9 y teclado numérico)
    if ((keyCode >= 48 && keyCode <= 57) || (keyCode >= 96 && keyCode <= 105)) {
      event.preventDefault();
    }
  });
}

// Obtener la referencia a los elementos de entrada de nombres y apellidos
const nombreInputElement = document.getElementById('cli_nombre');
const apellidoInputElement = document.getElementById('cli_apellido');

// Aplicar la restricción de no permitir números en ambos campos
blockNumbersInput(nombreInputElement);
blockNumbersInput(apellidoInputElement);


/*-------------------------------------------------------------solo numeross------------------------------------*/

// Función para bloquear la entrada que no sea números en un campo de texto
function blockNonNumbersInput(inputElement) {
  inputElement.addEventListener('keydown', (event) => {
    // Obtener el código de la tecla pulsada
    const keyCode = event.which || event.keyCode;

    // Permitir las teclas de control (por ejemplo, las teclas de flecha, retroceso, etc.)
    if (event.ctrlKey || event.altKey || event.metaKey || keyCode === 8 || keyCode === 9) {
      return;
    }

    // Bloquear la entrada si la tecla no es un número (códigos de teclas del 0 al 9 y teclado numérico)
    if (!((keyCode >= 48 && keyCode <= 57) || (keyCode >= 96 && keyCode <= 105))) {
      event.preventDefault();
    }
  });
}

// Obtener la referencia a los elementos de entrada de nombres y apellidos
const telefonoInputElement = document.getElementById('cli_telefono');
const pesoInputElement = document.getElementById('cli_peso');


// Aplicar la restricción de solo permitir números en ambos campos
blockNonNumbersInput(telefonoInputElement);
blockNonNumbersInput(pesoInputElement);



/*-------------------------------------------------------------solo numeros y Punto------------------------------------*/

// Función para bloquear la entrada que no sean números y puntos en un campo de texto
function blockNonNumbersAndDecimalInput(inputElement) {
  inputElement.addEventListener('keydown', (event) => {
    // Obtener el código de la tecla pulsada
    const keyCode = event.which || event.keyCode;

    // Permitir las teclas de control (por ejemplo, las teclas de flecha, retroceso, etc.)
    if (event.ctrlKey || event.altKey || event.metaKey || keyCode === 8 || keyCode === 9) {
      return;
    }

    // Permitir números y el punto decimal (códigos de teclas del 0 al 9, teclado numérico y el punto)
    if (
      (keyCode >= 48 && keyCode <= 57) || // Números desde el teclado principal
      (keyCode >= 96 && keyCode <= 105) || // Números desde el teclado numérico
      keyCode === 110 || keyCode === 190 // Punto decimal (tanto el punto como el numpad decimal)
    ) {
      // Verificar que no haya más de un punto decimal en el campo
      if ((keyCode === 110 || keyCode === 190) && inputElement.value.includes('.')) {
        event.preventDefault();
      }
    } else {
      event.preventDefault();
    }
  });
}

// Obtener la referencia a los elementos de entrada de nombres y apellidos
const alturaInputElement = document.getElementById('cli_altura');

// Aplicar la restricción de solo permitir números y puntos en ambos campos
blockNonNumbersAndDecimalInput(alturaInputElement);


/*-------------------------------------------------------------FIN------------------------------------*/



        var cedulaInput = document.getElementById("cli_cedula");
        var cedulaError = document.getElementById("cedulaError");
        var btnGuardar = document.getElementById("btnGuardar");

        cedulaInput.addEventListener("blur", validarCedula);

        function validarCedula() {
            var cedula = cedulaInput.value;

            if (esCedulaValida(cedula) && esCedulaProvinciaEcuador(cedula) && validarAlgoritmoCedula(cedula)) {
                cedulaError.textContent = "";
                btnGuardar.disabled = false;
            } else {
                cedulaError.textContent = "La cédula no es válida";
                btnGuardar.disabled = true;
            }
        }

        function esCedulaValida(cedula) {
            // Validación básica de longitud y formato numérico
            if (cedula.length !== 10 || !/^\d{10}$/.test(cedula)) {
                return false;
            }
            return true;
        }

        function esCedulaProvinciaEcuador(cedula) {
            // Obtener el código de provincia
            var provincia = parseInt(cedula.substr(0, 2));

            // Verificar si la provincia está en el rango de provincias de Ecuador
            if (provincia >= 1 && provincia <= 24) {
                return true;
            } else {
                return false;
            }
        }

        function validarAlgoritmoCedula(cedula) {
            var total = 0;
            var coeficientes = [2, 1, 2, 1, 2, 1, 2, 1, 2];
            var digitoVerificador = parseInt(cedula.substring(9, 10));

            for (var i = 0; i < 9; i++) {
                var digito = parseInt(cedula.substring(i, i + 1));
                var resultado = digito * coeficientes[i];
                if (resultado > 9) {
                    resultado -= 9;
                }
                total += resultado;
            }

            var residuo = total % 10;
            var resultadoFinal = residuo === 0 ? 0 : 10 - residuo;

            return resultadoFinal === digitoVerificador;
        }
    </script>

</body>

</html>