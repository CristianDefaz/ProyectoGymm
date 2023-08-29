<?php
include_once('../../config/sesiones.php');
if (isset($_SESSION["cliente_id"])) {
    $_SESSION["ruta"] = "Recibo Membresias";
?>

<!DOCTYPE html>
<html lang="es">

<head>
<?php require_once('../html/head.php')  ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body class="bg-white">
<?php include_once('../html/header.php')  ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Revisa tus compras hechas</h4>
            <div class="d-inline-flex">
            <p class="m-0 text-white"><a class="text-white" href="../Dashboard/home.php">Menu</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Historial</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

<!-- Contact Start -->
<div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
           
            <h4 class="display-4 font-weight-bold">Historial de compras</h4>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Testimonial Start -->
    <div class="container-fluid position-relative  mt-5" style="margin-bottom: 90px;">
                <div class="card shadow mb-4">
                <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="fechaDesdeInput">Fecha Desde:</label>
                                        </div>
                                        <input type="date" class="form-control" id="fechaDesdeInput" aria-label="Search by date" aria-describedby="basic-addon2">


                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="fechaHastaInput">Fecha Hasta:</label>
                                        </div>
                                        <input type="date" class="form-control" id="fechaHastaInput" aria-label="Search by date" aria-describedby="basic-addon2">

                                        <div class="input-group-append">
                                            <button class="btn btn-primary no-imprimir" type="button" onclick="filtrarPorFecha()">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <div class="card-body">
                                        <table class="table table-bordered table-striped table-responsive">
                                            <thead>
                                            <tr>
                                                    <th>#</th>
                                                    <th>Datos Cliente</th>
                                                    <th>Fecha</th>
                                                    <th>Membresia</th>
                                                    <th>Monto "$"</th>
                                                    <th>voucher de pago</th>
                                                    <th>Estado de compra</th>
                                                    <th>Opcion</th>
                                                </tr>
                                            </thead>
                                            <tbody id='TablaFactura'></tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="sumaMontosInput">Suma Monto :</label>
                                                <input type="text" id="sumaMontosInput" class="form-control form-control-lg" readonly>
                                            </div>
                                        </div>
                                    </div>
                    </div>
            </div>
      <!-- Ventanas Modales -->
      
                            <div id="imageModal" class="modal">
                                <div class="modal-content" style="display: flex; justify-content: center; align-items: center; height: 100%;">
                                    <img id="modalImage" src="" alt="Imagen" style="max-width: 100%; max-height: 80vh;">
                                    <button type="button" class="btn btn-secondary" onclick="cerrarModal()" data-dismiss="modal">Cerrar Imagen</button>
                                </div>
                            </div>

                                 
        </div>

  


    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

<script src="../../Plog/vendor/jquery/jquery.min.js"></script>
<script src="../../Plog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../Plog/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../../Plog/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="../../public/vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        verificarMembresia(); // Llamada a la función una vez que la página ha cargado
    });
</script>

<script src="./Hrecibo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    
</body>

</html>
<?php
} else {
    header("Location:../../index.php");
}
?>