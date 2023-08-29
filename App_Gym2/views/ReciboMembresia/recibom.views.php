<?php
include_once('../../config/sesiones.php');
if (isset($_SESSION["em_id"])) {
    $_SESSION["ruta"] = "Control Recibos";
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
                    <div class="container-fluid position-relative  mt-5" style="margin-bottom: 90px;">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Lista de Membresias</h6>
                                <button onclick="cargaselect()" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalfactura" hidden> Comprar Membresia</button>
                            </div>
                            <div class="card-body">
                            <div class="form-group">
                                            
                                            <div class="input-group">
                                                <input type="text" name="buscarInput" id="buscarInput" placeholder="Busqueda por Cedula o Estado de Membresia class="form-control" required>
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button" onclick="busqueda()">
                                                        <i class="fas fa-search fa-sm"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                <table class="table table-bordered table-striped table-responsive">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Datos Cliente</th>
                                            <th>Fecha</th>
                                            <th>Membresia</th>
                                            <th>Monto "$"</th>
                                            <th>voucher de pago</th>
                                            <th>Estado</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id='TablaFactura'></tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal fade" id="modalfactura" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tituloModalFactura">Nueva <?php echo $_SESSION["ruta"] ?></h5>
                                <button type="button" onclick="limpiar()" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="Recibo_form">
                                <div class="modal-body">
                                    <input type="hidden" name="id_recibo" id="id_recibo">
                                    <div class="form-group">
                                        <label for="cli_id" class="control-label">Cedula Cliente</label>
                                        <select name="cli_id" id="cli_id" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="fa_fecha" class="control-label">Fecha</label>
                                        <input type="date" name="fa_fecha" id="fa_fecha" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="men_id" class="control-label">Membresia</label>
                                        <select onchange="calcularvalor(this)" name="men_id" id="men_id" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="men_fecha_inicio" class="control-label">Fecha Inicio</label>
                                        <input type="datetime-local" name="men_fecha_inicio" id="men_fecha_inicio" class="form-control" required>
                                    </div>

                                    <div class="form-group" hidden>
                                        <label for="men_fecha_fin" class="control-label">Fecha Fin</label>
                                        <input type="datetime-local" name="men_fecha_fin" id="men_fecha_fin" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="fa_montol_total" class="control-label">Valor a Pagar "$"</label>
                                        <input type="text" name="fa_montol_total" id="fa_montol_total" class="form-control" readonly />
                                    </div>
                                    <div class="form-group">
                                        <label for="men_estado" class="control-label">Estado</label>
                                        <select name="estado" id="estado" class="form-control" required>
                                            <option value="Activo">Activo</option>
                                            <option value="Pendiente">Pendiente</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" hidden>Imagen de Categoria</label>
                                        <input type="text" name="imagen" id="imagen" class="form-control" hidden>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" onclick="guardarDatos()">Guardar</button>
                                    <button type="button" class="btn btn-secondary" onclick="limpiar()" data-dismiss="modal">Cerrar</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="imageModal" class="modal">
                <div class="modal-content" style="display: flex; justify-content: center; align-items: center; height: 100%;">
                    <img id="modalImage" src="" alt="Imagen" style="max-width: 100%; max-height: 80vh;">
                    <button type="button" class="btn btn-secondary" onclick="cerrarModal()" data-dismiss="modal">Cerrar Imagen</button>
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



        <!--scripts-->
        <?php include_once('../html/scripts.php')  ?>
        <script src="./recibom.js"></script>
        <script>
    // Obtén la fecha actual en el formato YYYY-MM-DD
    var fechaActual = new Date().toISOString().split('T')[0];
    
    // Asigna la fecha actual al campo de entrada de fecha
    document.getElementById('fa_fecha').value = fechaActual;
</script>
        <script>
            function guardarDatos() {
                // Obtener los valores de los campos del formulario
                var cli_id = $("#cli_id").val();
                var men_id = $("#men_id").val();
                var men_fecha_inicio = $("#men_fecha_inicio").val();
                var men_fecha_fin = $("#men_fecha_fin").val();
                var estado = $("#estado").val();

                // Realizar una solicitud AJAX para ejecutar el archivo PHP
                $.ajax({
                    type: "POST",
                    url: "./recibom.membresia.php",
                    data: {
                        cli_id: cli_id,
                        men_id: men_id,
                        men_fecha_inicio: men_fecha_inicio,
                        men_fecha_fin: men_fecha_fin,
                        estado: estado
                    },
                    success: function(response) {
                        // Manejar la respuesta del archivo PHP si es necesario
                        console.log(response);
                    }
                });

                // Luego, puedes continuar con tu lógica de JavaScript
                // ...
            }
        </script>
        <script>
            // Obtener los elementos del campo de fecha de inicio, fecha de fin y el campo "Tipo Membresía"
            var fechaInicioInput = document.getElementById('men_fecha_inicio');
            var fechaFinInput = document.getElementById('men_fecha_fin');
            var tipoMembresiaSelect = document.getElementById('tipo_id');
            // Obtener la fecha y hora actual
            var fechaActual = new Date();
            // Obtener los componentes de fecha y hora de tu computadora local
            var year = fechaActual.getFullYear();
            var month = ('0' + (fechaActual.getMonth() + 1)).slice(-2);
            var day = ('0' + fechaActual.getDate()).slice(-2);
            var hours = ('0' + fechaActual.getHours()).slice(-2);
            var minutes = ('0' + fechaActual.getMinutes()).slice(-2);
            var seconds = ('0' + fechaActual.getSeconds()).slice(-2);
            // Formatear la fecha y hora actual en el formato requerido por el campo de entrada de fecha (AAAA-MM-DD HH:mm:ss)
            var formattedFechaActual = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes;
            // Establecer la fecha y hora actual como el valor del campo de entrada de fecha de inicio
            fechaInicioInput.value = formattedFechaActual;
            // Agregar evento de cambio al campo "Tipo Membresía"
            tipoMembresiaSelect.addEventListener('change', calcularFechaFin);
            // Función para calcular la fecha de fin
            function calcularFechaFin() {
                var eleccion = tipoMembresiaSelect.value; // Obtener la elección seleccionada
                var fechaInicio = new Date(fechaInicioInput.value);
                var fechaFin = new Date(fechaInicio.getTime());
                if (eleccion === '3') {
                    fechaFin.setMonth(fechaInicio.getMonth() + 1);
                } else if (eleccion === '4') {
                    fechaFin.setMonth(fechaInicio.getMonth() + 6);
                    if (fechaInicio.getMonth() > fechaFin.getMonth()) {
                        fechaFin.setFullYear(fechaInicio.getFullYear() + 1);
                    } else {
                        fechaFin.setFullYear(fechaInicio.getFullYear());
                    }
                } else if (eleccion === '5') {
                    fechaFin.setFullYear(fechaInicio.getFullYear() + 1);
                } else if (eleccion === '6') {
                    fechaFin.setTime(fechaInicio.getTime() + 1 * 60 * 1000); // Agregar 5 minutos (5 * 60 segundos * 1000 milisegundos)
                }
                // Obtener los componentes de fecha de fin
                var finYear = fechaFin.getFullYear();
                var finMonth = ('0' + (fechaFin.getMonth() + 1)).slice(-2);
                var finDay = ('0' + fechaFin.getDate()).slice(-2);
                var finHours = ('0' + fechaFin.getHours()).slice(-2);
                var finMinutes = ('0' + fechaFin.getMinutes()).slice(-2);
                // Formatear la fecha de fin en el formato requerido por el campo de entrada de fecha de fin
                var formattedFechaFin = finYear + '-' + finMonth + '-' + finDay + 'T' + finHours + ':' + finMinutes;
                fechaFinInput.value = formattedFechaFin;
            }
        </script>

        <script>
            function busqueda() {
                var buscar = document.getElementById("buscarInput").value;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("TablaFactura").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "recibom.busqueda.php?buscar=" + buscar, true);
                xmlhttp.send();
            }
        </script>

    </body>

    </html>

<?php
} else {
    header("Location:../../index.php");
}
?>