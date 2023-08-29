<?php
include_once('../../config/sesiones.php');
if (isset($_SESSION["em_id"])) {
    $_SESSION["ruta"] = "Control Membresias";
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
                                        <button onclick="cargaSelectcitipo()" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalMembresia"> Nueva Membresia</button>
                                    </div>
                                    <div class="card-body">
                                        <!-- BUSCADOR -->

                                        <div class="form-group">
                                            
                                            <div class="input-group">
                                                <input type="text" name="buscarInput" id="buscarInput" placeholder="Busqueda por Cedula o Tipo de membresia" class="form-control" required>
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button" onclick="busqueda()">
                                                        <i class="fas fa-search fa-sm"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                         <!-- END BUSCADOR -->




                                        <table class="table table-bordered table-striped table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Cedula</th>
                                                    <th>Tipo Membresia</th>
                                                    <th>Fecha inicio</th>
                                                    <th>Fecha fin</th>
                                                    <th>Tiempo Restante</th>
                                                    <th>Estado</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id='TablaMembresia'></tbody>
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



        <div class="modal fade" data-backdrop="static" data-keyboard="false" id="modalMembresia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tituloModalMembresia">Nueva membresia</h5>
                        <button type="button" onclick="limpiar()" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <form id="Membresia_form">
                        <div class="modal-body">
                            <input type="hidden" name="men_id" id="men_id">

                            <div class="form-group">
                                <label for="cliente_id" class="control-label">Cedula</label>
                                <select name="cliente_id" id="cliente_id" class="form-control">
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tipo_id" class="control-label">Tipo Membresia</label>
                                <select name="tipo_id" id="tipo_id" class="form-control">
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="men_fecha_inicio" class="control-label">Fecha Inicio</label>
                                <input type="datetime-local" name="men_fecha_inicio" id="men_fecha_inicio" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="men_fecha_fin" class="control-label">Fecha Fin</label>
                                <input type="datetime-local" name="men_fecha_fin" id="men_fecha_fin" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="men_estado" class="control-label">Estado</label>
                                <input type="text" name="men_estado" id="men_estado" class="form-control" value="Activo" readonly required>
                            </div>

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
        <script src="./Membresias.js"></script>
        <script>
    function busqueda() {
        var buscar = document.getElementById("buscarInput").value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("TablaMembresia").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "Membresias.busqueda.php?buscar=" + buscar, true);
        xmlhttp.send();
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
    </body>

    </html>

<?php
} else {
    header("Location:../../index.php");
}
?>