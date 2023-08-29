<?php
include_once('../../config/sesiones.php');
if (isset($_SESSION["em_id"])) {
    $_SESSION["ruta"] = "Historial";
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
                                        <button onclick="cargaSelectcitipo()" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalMembresia" hidden> Nueva Membresia</button>
                                    </div>
                                    <div class="card-body">
                                        <!-- BUSCADOR -->

                                        <div class="form-group">
                                            
                                            <div class="input-group">
                                                <input type="text" name="buscarInput" id="buscarInput" placeholder="Busqueda por nombre de la Tabla o Empleado" class="form-control" required>
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button" onclick="busqueda()">
                                                        <i class="fas fa-search fa-sm"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                         <!-- END BUSCADOR -->



                                        <?php
                                        
                                        ?>
                    
                                        <table class="table table-bordered table-striped table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Detalle</th>
                                                    <th>Nombre cliente</th>
                                                    <th>Usuario</th>
                                                    <th>Nombre Empleado</th>
                                                    <th>Nombre de la tabla</th>
                                                    <th>Operacion</th>
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            <tbody id='TablaHistorial'></tbody>
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

        <!--scripts-->
        <?php include_once('../html/scripts.php')  ?>
        <script src="./historial.js"></script>
        <script>
    function busqueda() {
        var buscar = document.getElementById("buscarInput").value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("TablaHistorial").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "historial.busqueda.php?buscar=" + buscar, true);
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