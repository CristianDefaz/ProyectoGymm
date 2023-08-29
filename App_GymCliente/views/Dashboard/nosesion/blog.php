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
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Nuestro Blog</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="../../../index.php">Inicio</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Blogs</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    
    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Nuestros Blogs</h4>
            <h4 class="display-4 font-weight-bold">Articulos Destacados</h4>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="https://www.paho.org/sites/default/files/alimentacao-saudavel-diversificada.jpg" alt="Image" style="width: 50%; max-width: 500px;">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 80px; height: 80px;">
                        <small>24</small>
                        <strong class="text-uppercase m-0 text-white">Agosto</strong>
                        <small>2023</small>
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold">La Importancia de una Buena Alimentación para una Vida Saludable</h3>
                        <div class="d-flex">
                            <small class="mr-2 text-muted"><i class="fa fa-user"></i>Administrador</small>

                        </div>
                    </div>
                </div>
                <p class="text-justify">La alimentación juega un papel fundamental en nuestra salud y bienestar. Una dieta equilibrada y nutritiva no solo nos proporciona la energía necesaria para llevar a cabo nuestras actividades diarias, sino que también es esencial para prevenir enfermedades y mantener un estilo de vida saludable. A continuación</p>
                <a class="btn btn-outline-primary mt-2 px-3" href="./blogs/blog_1.php" target="_blank">Mas Información <i class="fa fa-angle-right"></i></a>
            </div>
            <!-- Articulo-->
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="data:image/jpeg;base64,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" alt="Image" style="width: 50%; max-width: 500px;">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 80px; height: 80px;">
                        <small>24</small>
                        <strong class="text-uppercase m-0 text-white">Agosto</strong>
                        <small>2023</small>
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold">Los Beneficios del Ejercicio para una Vida Saludable.</h3>
                        <div class="d-flex">
                            <small class="mr-2 text-muted"><i class="fa fa-user"></i>Administrador</small>
                        </div>
                    </div>
                </div>
                <p class="text-justify">El ejercicio físico regular no solo es esencial para mantener un cuerpo en forma, sino que también tiene un impacto profundo en nuestra salud mental y emocional. Desde la mejora de la condición cardiovascular hasta la reducción del estrés, los beneficios del ejercicio son numerosos y variados.</p>
                <a class="btn btn-outline-primary mt-2 px-3" href="./blogs/blog_2.php" target="_blank">Mas Información <i class="fa fa-angle-right"></i></a>
            </div>
            <!-- Articulo-->
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="https://s2.abcstatics.com/media/salud/2019/04/07/habitos-saludables-kwKE--620x349@abc.jpg" alt="Image" style="width: 50%; max-width: 500px;">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 80px; height: 80px;">
                        <small>24</small>
                        <strong class="text-uppercase m-0 text-white">Agosto</strong>
                        <small>2023</small>
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold">Hábitos Saludables que se Desarrollan a partir del Ejercicio Regular</h3>
                        <div class="d-flex">
                            <small class="mr-2 text-muted"><i class="fa fa-user"></i>Administrador</small>

                        </div>
                    </div>
                </div>
                <p class="text-justify">La decisión de incorporar el ejercicio regular en nuestra vida es mucho más que un simple paso hacia la mejora física. El ejercicio actúa como un punto de partida que desencadena una serie de cambios positivos en diversos aspectos de nuestro bienestar. En este artículo, </p>
                <a class="btn btn-outline-primary mt-2 px-3" href="./blogs/blog_3.php"target="_blank">Mas Información <i class="fa fa-angle-right"></i></a>
            </div>

                        <!-- Articulo-->
                        <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="https://s2.abcstatics.com/media/salud/2019/04/07/habitos-saludables-kwKE--620x349@abc.jpg" alt="Image" style="width: 50%; max-width: 500px;">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 80px; height: 80px;">
                        <small>24</small>
                        <strong class="text-uppercase m-0 text-white">Agosto</strong>
                        <small>2023</small>
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold">Hábitos Saludables que se Desarrollan a partir del Ejercicio Regular</h3>
                        <div class="d-flex">
                            <small class="mr-2 text-muted"><i class="fa fa-user"></i>Administrador</small>

                        </div>
                    </div>
                </div>
                <p class="text-justify">La decisión de incorporar el ejercicio regular en nuestra vida es mucho más que un simple paso hacia la mejora física. El ejercicio actúa como un punto de partida que desencadena una serie de cambios positivos en diversos aspectos de nuestro bienestar. En este artículo, </p>
                <a class="btn btn-outline-primary mt-2 px-3" href="./blogs/blog_3.php"target="_blank">Mas Información <i class="fa fa-angle-right"></i></a>
            </div>
            <!-- Blog End -->

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