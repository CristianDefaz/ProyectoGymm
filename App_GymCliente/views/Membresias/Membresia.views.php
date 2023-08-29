<?php
include_once('../../config/sesiones.php');
if (isset($_SESSION["cliente_id"])) {
    $_SESSION["ruta"] = "Control Membresias";
?>

<!DOCTYPE html>
<html lang="es">

<head>
<?php require_once('../html/head.php')  ?>
</head>

<body class="bg-white">
<?php include_once('../html/header.php')  ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Membresia</h4>
            <div class="d-inline-flex">
            <p class="m-0 text-white"><a class="text-white" href="../Dashboard/home.php">Menu</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Membresias</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    


    <!-- Testimonial Start -->
    <div class="container-fluid position-relative  mt-5" style="margin-bottom: 90px;">
                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Lista de <?php echo $_SESSION["ruta"]?></h6>
                                        
                                    </div>
                                    <div class="card-body">
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
                                                </tr>
                                            </thead>
                                            <tbody id='TablaMembresia'></tbody>
                                        </table>
                                    </div>
                    </div>
    </div>
    <!-- Testimonial End -->


  


    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="./Membresia.js"></script>
</body>

</html>
<?php
} else {
    header("Location:../../index.php");
}
?>