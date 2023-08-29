

<!DOCTYPE html>
<html lang="es">
<title> Home</title>
<head>
<?php require_once('../html/head.php')  ?>

</head>
<body >
<?php
// Conexión a la base de datos
$mysqli = mysqli_connect("localhost", "root", "", "db_gym_dos");

// Verificar la conexión
if (!$mysqli) {
    die("Error en la conexión: " . mysqli_connect_error());
}

// Consulta SQL
$query = "SELECT COUNT(*) as count FROM recibos_membresia WHERE estado = 'Pendiente'";
$result = mysqli_query($mysqli, $query);

if (!$result) {
    die("Error en la consulta: " . mysqli_error($mysqli));
}

$row = mysqli_fetch_assoc($result);
$count = $row["count"];

if ($count > 0) {
    echo "<script>
        Swal.fire(
            'Tiene membresias Pendientes por activar',
            '',
            'warning'
        );
    </script>";
}

// Cerrar la conexión
mysqli_close($mysqli);
?>

    <div id="wrapper">
        <!-- Sidebar -->
        <?php  require_once('../html/menu.php') ?>
        <!-- End of Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
                <?php include_once('../html/header.php')  ?>

            <!-- Page Heading -->
                <div class="container-fluid p-0">
                    <div id="blog-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="w-100" src="../../public/imgs/carousel-1.jpg" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">

                                    <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">EVOLUTION GYM</h2>
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="w-100" src="../../public/imgs/carousel-2.jpg" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">

                                    <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">EL MEJOR </h2>
                                    
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                       
                    </div>
                </div>
            <!-- Footer -->
            <?php  include_once('../html/footer.php') ?>
            <!-- End of Footer -->
        </div>
    </div>
    <a class="scroll-to-top rounded" href="../Dashboard/home.php">
        <i class="fas fa-angle-up"></i>
    </a>
  <!--scripts-->
  <?php include_once('../html/scripts.php')  ?>
</body>

</html>