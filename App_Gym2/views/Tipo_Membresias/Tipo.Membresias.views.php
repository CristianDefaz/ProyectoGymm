<?php
include_once('../../config/sesiones.php');
if (isset($_SESSION["em_id"])) {
    $_SESSION["ruta"] = "Tipo Membresias";
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <?php require_once('../html/head.php')  ?>
    </head>

    <body id="page-top">
        <div id="wrapper">
            <!-- Sidebar -->
            <?php require_once('../html/menu.php') ?>
            <!-- End of Sidebar -->
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <!-- Topbar -->
                    <?php include_once('../html/header.php')  ?>
                    <!-- End of Topbar -->

                    <div class="container-fluid">

                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800"><?php echo $_SESSION["ruta"] ?></h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-4">

                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Lista de <?php echo $_SESSION["ruta"] ?></h6>
                                        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modalMembresias" hidden> Nueva Membresia</button>
                                    </div>
                                    <div class="card-body">

                                        <table class="table table-bordered table-striped table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tipo Membresia</th>
                                                    <th>Tipo Descripcion</th>
                                                    <th>Duracion</th>
                                                    <th>Precio Mensual "$"</th>
                                                    <th>Costo "$"</th>
                                                    <th hidden>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody id='TablaTMembresias'></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <?php include_once('../html/footer.php') ?>
                <!-- End of Footer -->
            </div>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>


        <!-- Ventana Modal -->

        <div class="modal fade" data-backdrop="static" data-keyboard="false" id="modalMembresias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tituloModalTmenbresias">Nuevo Empleado</h5>
                        <button type="button" onclick="limpiar()" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <form id="Tmembresias_form">
                        <div class="modal-body">
                            <input type="hidden" name="tipo_id" id="tipo_id">

                            <div class="form-group">
                                <label for="tipo_menbresia" class="control-label">Tipo Membresia</label>
                                <input type="text" name="tipo_menbresia" id="tipo_menbresia" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="tipo_descripcion" class="control-label">Tipo Descripcion</label>
                                <input type="text" name="tipo_descripcion" id="tipo_descripcion" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="tipo_duracion" class="control-label">Duracion</label>
                                <input type="text" name="tipo_duracion" id="tipo_duracion" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="tipo_precio_mensual" class="control-label">Precio Mensual "$"</label>
                                <input type="text" name="tipo_precio_mensual" id="tipo_precio_mensual" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="tipo_costo" class="control-label">Costo "$"</label>
                                <input type="mail" name="tipo_costo" id="tipo_costo" class="form-control" required>
                            </div>
                            <input type="hidden" name="id_empleado" id="id_empleado" value="">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-secondary" onclick="limpiar()" data-dismiss="modal">Cerrar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!--scripts-->
        <?php include_once('../html/scripts.php')  ?>
        <script src="./Tipo.Membresias.js"></script>
        <script>
            // Obtén el valor de $_SESSION['em_id'] y asígnalo a la variable idEmpleado
            var idEmpleado = "<?php echo isset($_SESSION['em_id']) ? $_SESSION['em_id'] : ''; ?>";

            // Asigna el valor de idEmpleado al input oculto
            document.getElementById('id_empleado').value = idEmpleado;
        </script>
        <!--CODIGO DE BLOQUEO DE CAJAS INT O STRING-->
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
            const tipo_menbresiaInputElement = document.getElementById('tipo_menbresia');
           // const tipo_descripcionInputElement = document.getElementById('tipo_descripcion');
           

            // Aplicar la restricción de no permitir números en ambos campos
            blockNumbersInput(tipo_menbresiaInputElement);
            //blockNumbersInput(tipo_descripcionInputElement);


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
            const tipo_duracionInputElement = document.getElementById('tipo_duracion');
            const tipo_precio_mensualInputElement = document.getElementById('tipo_precio_mensual');
            const tipo_costoInputElement = document.getElementById('tipo_costo');


            // Aplicar la restricción de solo permitir números en ambos campos
            blockNonNumbersInput(tipo_duracionInputElement);
            blockNonNumbersInput(tipo_precio_mensualInputElement);
            blockNonNumbersInput(tipo_costoInputElement);



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
        </script>
    </body>

    </html>

<?php
} else {
    header("Location:../../index.php");
}
?>