<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gymnast - Gym Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="../../../public/img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="../../../public/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../../public/css/style.min.css" rel="stylesheet">
    <style>
        .center-text {
            text-align: center;
            color: white;
        }
    </style>
</head>

<body class="bg-white">
    <!-- Navbar Start -->
<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="" class="navbar-brand">
            <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">Gymnast</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4 bg-secondary">
                <a href="../../../index.php" class="nav-item nav-link active">Menu</a>
                <a href="about.php" class="nav-item nav-link">Nosotros</a>
                <a href="feature.php" class="nav-item nav-link">Caracteristicas</a>
                <a href="blog.php" class="nav-item nav-link">Articulos</a>
                <a href="contact.php" class="nav-item nav-link">Contacto</a>
                <a href="../../../views/sesion/login.php" class="nav-item nav-link">Inicio de sesion</a>
            </div>

        </div>
    </nav>
</div>
<!-- Navbar End -->



      <!-- Page Header Start -->
      <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Nosotros</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="../../../index.php">Inicio</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Nosotros</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


 <!-- About Start -->
 <div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <img class="img-fluid mb-4 mb-lg-0" src="../../../public/img/about.jpg" alt="Image">
        </div>
        <div class="col-lg-6">
            <h2 class="display-4 font-weight-bold mb-4">10 años de Experiencia</h2>
            <p class="center-text text-justify">La experiencia en Energy Gym es enriquecedora y va más allá del ejercicio. Ofrecemos una amplia gama de equipos y actividades para todos los gustos, respaldados por entrenadores expertos que brindan orientación personalizada. </p>
            <div class="row py-2">
                <div class="col-sm-6">
                    <i class="flaticon-barbell display-2 text-primary"></i>
                    <h4 class="font-weight-bold">Certified GYM Center</h4>
                    <p>Ipsum sanctu dolor ipsum dolore sit et kasd duo</p>
                </div>
                <div class="col-sm-6">
                    <i class="flaticon-medal display-2 text-primary"></i>
                    <h4 class="font-weight-bold">Award Winning</h4>
                    <p>Ipsum sanctu dolor ipsum dolore sit et kasd duo</p>
                </div>
            </div>
            <a href="" class="btn btn-lg px-4 btn-outline-primary">Learn More</a>
        </div>
    </div>
</div>
<!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                    <i class="flaticon-training display-3 text-primary mr-3"></i>
                    <div class="">
                        <h2 class="text-white mb-3">Progreso</h2>
                        <p class="center-text text-justify"> Organiza tu horario para tus ejercicios 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-primary text-white px-5" style="min-height: 300px;">
                    <i class="flaticon-weightlifting display-3 text-secondary mr-3"></i>
                    <div class="">
                        <h2 class="text-white mb-3">Rutinas de ejercicios</h2>
                        <p class="center-text text-justify">Siempre es bueno empezar calentando 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                    <i class="flaticon-treadmill display-3 text-primary mr-3"></i>
                    <div class="">
                        <h2 class="text-white mb-3">Nutrición</h2>
                        <p class="center-text text-justify">Una nutrición balanceada es muy importante para mantener el equilibrio fisico de tu cuerpo
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Footer Start -->
    <?php require_once('../../../views/html/footer.php')  ?>
    <!-- Footer End -->


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
</body>

</html>