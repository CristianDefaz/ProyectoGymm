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
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Info de Membresias</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="../../../index.php">Inicio</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Info de Membresias</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- GYM Feature Start -->
    <div class="container feature pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Membresias ENERGY GYM</h4>
            <h4 class="display-4 font-weight-bold">Combos</h4>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="https://previews.123rf.com/images/nexusby/nexusby1608/nexusby160800382/61636427-centro-de-fitness-dise%C3%B1o-de-la-tarjeta-gimnasio-azul-sobre-fondo-blanco.jpg" alt="Image">
                        <i class="flaticon-barbell"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Mensual </h4>
                        <p class="text-justify"> Membresia de tipo Mensual de 30 días habiles
                        </p>
                        <l class="text-justify">   Precio 20 dolares. </l>
                        <h5 class="text-justify"><small>*Pagos por transferencia</small></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="https://previews.123rf.com/images/nexusby/nexusby1608/nexusby160800382/61636427-centro-de-fitness-dise%C3%B1o-de-la-tarjeta-gimnasio-azul-sobre-fondo-blanco.jpg" alt="Image">
                        <i class="flaticon-barbell"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Semestral</h4>
                        <p class="text-justify"> Membresia de tipo Mensual de 182 días habiles </p>
                        <l class="text-justify">   Precio 120 dolares. </l>
                        <h5 class="text-justify"><small>*Pagos por transferencia</small></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="https://previews.123rf.com/images/nexusby/nexusby1608/nexusby160800382/61636427-centro-de-fitness-dise%C3%B1o-de-la-tarjeta-gimnasio-azul-sobre-fondo-blanco.jpg" alt="Image">
                        <i class="flaticon-barbell"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Anual</h4>
                        <p class="text-justify">Membresia de tipo Mensual de 364 días habiles</p>
                        <l class="text-justify">   Precio 240 dolares. </l>
                        <h5 class="text-justify"><small>*Pagos por transferencia</small></h5>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- GYM Feature End -->





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