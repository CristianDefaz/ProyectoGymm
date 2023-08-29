<?php
include_once('../../config/sesiones.php');
if (isset($_SESSION["em_id"])) {
    $_SESSION["ruta"] = "Factura";
    
    $rol_id = $_SESSION['rol_id'];
   
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
                                        <button onclick="cargaselect()" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalFactura"> Nueva <?php echo $_SESSION["ruta"] ?></button>
                                    </div>
                                    <div class="card-body">
                                        <!-- BUSCADOR -->

                                        <div class="form-group">
                                            
                                            <div class="input-group">
                                                <input type="text" name="buscarInput" id="buscarInput" placeholder="Busqueda por Cédula, Apellido o Tipo de membresia" class="form-control" required>
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button" onclick="busqueda()">
                                                        <i class="fas fa-search fa-sm"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                         <!-- END BUSCADOR -->
                                         <input type="hidden" id="rolId" value="<?php echo $rol_id; ?>">
                                        <table class="table table-bordered table-striped table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Datos Cliente</th>
                                                    <th>Fecha</th>
                                                    <th>Membresia</th>
                                                    <th>Monto "$"</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody id='TablaFactura'></tbody>
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

        <div class="modal fade" data-backdrop="static" data-keyboard="false" id="modalFactura" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <style>
                        @media print {
                            .no-imprimir {
                                display: none;
                            }
                        }
                    </style>
                    <div class="modal-header">
                        <h5 class="modal-title" id="tituloModalFactura">Nueva <?php echo $_SESSION["ruta"] ?></h5>
                        <button type="button" onclick="limpiar()" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    
                    <form id="Facturas_form">
                        <div class="modal-body">
                            <input type="hidden" name="factura_id" id="factura_id">

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
                                        <label for="fa_montol_total" class="control-label">Valor a Pagar "$"</label>
                                        <input type="text" name="fa_montol_total" id="fa_montol_total" class="form-control" readonly />                                      
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

        <!-- Imprimir Modal -->
        <div class="modal fade"  id="modalFacturaImprimir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <style>
                        @media print {
                            .no-imprimir {
                                display: none;
                            }
                        }
                    </style>

                    <div class="modal-header">
                        <h5 class="modal-title" id="tituloModalFactura">Factura</h5>


                    </div>
                    <form id="Facturas_form">
                        <div class="modal-body">


                            <div class="form-group">
                                <label for="cli_id" id="DatosCliente" class="control-label">Datos Cliente</label>
                               
                            </div>

                            <div class="form-group">
                                <label for="fa_fecha" id="Fecha" class="control-label">Fecha</label>
                               
                            </div>
                            <div class="form-group">
                                <label for="men_id" id="Membresia" class="control-label">Membresia</label>
                       

                            </div>
                            <div class="form-group">
                                <label for="fa_montol_total" id="ValoraPagar" class="control-label">Valor a Pagar</label>
                                

                            </div>
                            <div class="modal-footer">
                     
                                <button type="button" class="btn btn-secondary no-imprimir" onclick="limpiar()" data-dismiss="modal">Cerrar</button>
                            </div>
                    </form>

                </div>
            </div>
        </div>





        <!--scripts-->
        <?php include_once('../html/scripts.php')  ?>
        
        <script src="./Facturas.js"></script>
        <script>
    function busqueda() {
        var buscar = document.getElementById("buscarInput").value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("TablaFactura").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "facturas.busqueda.php?buscar=" + buscar, true);
        xmlhttp.send();
    }
</script>
        <script>
    // Obtén el valor de $_SESSION['em_id'] y asígnalo a la variable idEmpleado
    var idEmpleado = "<?php echo isset($_SESSION['em_id']) ? $_SESSION['em_id'] : ''; ?>";

    // Asigna el valor de idEmpleado al input oculto
    document.getElementById('id_empleado').value = idEmpleado;
</script>

    </body>

    </html>

<?php
} else {
    header("Location:../../index.php");
}
?>