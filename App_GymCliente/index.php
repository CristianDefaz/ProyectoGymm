<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gymnast - Gym Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="./public/img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="./public/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./public/css/style.min.css" rel="stylesheet">

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
                    <a href="index.php" class="nav-item nav-link active">Menu</a>
                    <a href="./views/Dashboard/nosesion/about.php" class="nav-item nav-link">Nosotros</a>
                    <a href="./views/Dashboard/nosesion/feature.php" class="nav-item nav-link">Caracteristicas</a>
                    <a href="./views/Dashboard/nosesion/blog.php" class="nav-item nav-link">Articulos</a>
                    <a href="./views/Dashboard/nosesion/contact.php" class="nav-item nav-link">Contacto</a>
                    <a href="./views/sesion/login.php" class="nav-item nav-link">Inicio de sesion</a>
                </div>

            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="./public/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0">EVOLUTION GYM</h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">EL mejor Gimnasio</h2>
                        <a href="./views/sesion/register.php" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Unete</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="./public/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0">EVOLUTION GYM</h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Pon tu cuerpo en forma</h2>
                        <a href="./views/sesion/register.php" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Unete</a>
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
    <!-- Carousel End -->


    <!-- Gym Class Start -->
    <div class="container gym-class mb-5">
        <div class="row px-3">
            <div class="col-md-6 p-0">
                <div class="gym-class-box d-flex flex-column align-items-end justify-content-center bg-primary text-right text-white py-5 px-5">
                    <i class="flaticon-six-pack"></i>
                    <h3 class="display-4 mb-3 text-white font-weight-bold">MISIÓN</h3>
                    <p class="text-justify">
                    "Proporcionar un ambiente inspirador y motivador que promueva un estilo de vida saludable y activo,
                        ofreciendo instalaciones de calidad, entrenamientos personalizados y programas de acondicionamiento
                        físico para personas de todas las edades y niveles de condición física. Nuestra misión es ayudar a nuestros
                        miembros a alcanzar sus objetivos de bienestar, fomentando la salud, la felicidad y el bienestar general."
                        <img class="w-100" src="./public/img/blog-2.jpg" alt="Image">
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="gym-class-box d-flex flex-column align-items-start justify-content-center bg-secondary text-left text-white py-5 px-5">
                    <i class="flaticon-bodybuilding"></i>
                    <h3 class="display-4 mb-3 text-white font-weight-bold">VISIÓN</h3>
                    <p class="text-justify">
                    "Nos esforzamos por convertirnos en el gimnasio líder en nuestra comunidad y más allá, reconocidos por nuestra
                        excelencia en servicios, innovación en programas de acondicionamiento físico y la creación de un ambiente amigable
                        y acogedor para nuestros miembros. Nuestra visión es ser el destino preferido para aquellos que buscan mejorar su
                        salud y forma física, brindando resultados tangibles y sostenibles a largo plazo para todos nuestros clientes y miembros."
                        <img class="w-100" src="./public/img/about.jpg" alt="Image">
                </div>
            </div>
        </div>
    </div>
    <!-- Gym Class End -->


     <!-- Features Start -->
     <div class="container-fluid my-5">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                    <i class="flaticon-training display-3 text-primary mr-3"></i>
                    <div class="">
                        <h2 class="text-white mb-3">Progreso</h2>
                        <p> Organiza tu horario para tus ejercicios 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-primary text-white px-5" style="min-height: 300px;">
                    <i class="flaticon-weightlifting display-3 text-secondary mr-3"></i>
                    <div class="">
                        <h2 class="text-white mb-3">Rutinas de ejercicios</h2>
                        <p>Siempre es bueno empezar calentando 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                    <i class="flaticon-treadmill display-3 text-primary mr-3"></i>
                    <div class="">
                        <h2 class="text-white mb-3">Nutrición</h2>
                        <p>Una nutrición balanceada es muy importante para mantener el equilibrio fisico de tu cuerpo
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->



        <!-- Team Start -->
    <div class="container pt-5 team">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Nuestros Entrenadores</h4>
            <h4 class="display-4 font-weight-bold">Conoce a Nuestros Entrenadores Expertos</h4>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="img/team-1.jpg" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">Juan Perez</h4>
                        <p class="card-text">Entrenador</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="img/team-2.jpg" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">Trainer Name</h4>
                        <p class="card-text">Entrenador</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="img/team-3.jpg" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">Trainer Name</h4>
                        <p class="card-text">Entrenador</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="img/team-4.jpg" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">Trainer Name</h4>
                        <p class="card-text">Entrenador</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    

  

     
    <!-- BMI Calculation Start -->
    <div class="container-fluid position-relative bmi my-5">
        <div class="container">
            <div class="row px-3 align-items-center">
                <div class="col-md-6">
                    <div class="pr-md-3 d-none d-md-block">
                        <h4 class="text-primary">Índice de Masa Corporal</h4>
                        <h4 class="display-4 text-white font-weight-bold mb-4">¿Qué es un IMC?</h4>
                        <p class="center-text text-justify">El Índice de Masa Corporal (IMC), en inglés Body Mass Index (BMI), es una medida utilizada para evaluar la relación entre el peso y la altura de una persona. Se utiliza comúnmente como una herramienta para clasificar si una persona tiene un peso bajo, normal, sobrepeso u obesidad.</p>
                    </div>
                </div>
                <div class="col-md-6 bg-secondary py-5">
                    <div class="py-5 px-3">
                        <h1 class="mb-4 text-white">Calcula tu Índice de Masa Corporal</h1>
                        <form id="bmi-form">
                            <div class="form-row">
                                <div class="col form-group">
                                    <input type="text" id="weight" class="form-control form-control-lg bg-dark text-white" placeholder="Peso (KG)">
                                </div>
                                <div class="col form-group">
                                    <input type="text" id="height" class="form-control form-control-lg bg-dark text-white" placeholder="Altura (CM)">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <input type="text" id="age" class="form-control form-control-lg bg-dark text-white" placeholder="Edad">
                                </div>
                                <div class="col form-group">
                                    <select id="gender" class="custom-select custom-select-lg bg-dark text-muted">
                                        <option value="default">Género</option>
                                        <option value="male">Hombre</option>
                                        <option value="female">Mujer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <input type="button" id="calculate-btn" class="btn btn-lg btn-block btn-dark border-light" value="Calcular Ahora">
                                </div>
                            </div>
                        </form>
                        <div id="result" class="mt-4 text-white"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BMI Calculation End -->



    <!-- Testimonial Start -->
   <!-- <div class="container-fluid position-relative testimonial my-5">
        <div class="container">
            <div class="row px-3 align-items-center">
                <div class="col-md-6 bg-secondary">
                    <div class="d-flex align-items-center px-3" style="min-height: 450px;">
                        <div id="carouselId" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselId" data-slide-to="1"></li>
                                <li data-target="#carouselId" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="d-flex align-items-center mb-4 text-white">
                                        <img width="80" height="80" class="rounded-circle bg-dark p-2" src="img/testimonial-1.jpg" alt="Image">
                                        <div class="pl-4">
                                            <h4 class="text-primary">Client Name</h4>
                                            <p class="m-0">Profession</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex align-items-center mb-4 text-white">
                                        <img width="80" height="80" class="rounded-circle bg-dark p-2" src="img/testimonial-2.jpg" alt="Image">
                                        <div class="pl-4">
                                            <h4 class="text-primary">Client Name</h4>
                                            <p class="m-0">Profession</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex align-items-center mb-4 text-white">
                                        <img width="80" height="80" class="rounded-circle bg-dark p-2" src="img/testimonial-3.jpg" alt="Image">
                                        <div class="pl-4">
                                            <h4 class="text-primary">Client Name</h4>
                                            <p class="m-0">Profession</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pl-md-3 d-none d-md-block">
                        <h4 class="text-primary">Testimonial</h4>
                        <h4 class="display-4 mb-4 text-white font-weight-bold">What Our Clients Say?</h4>
                        <p class="m-0 text-white">Vero elitr lorem magna justo magna justo at justo est ipsum sed clita lorem dolor ipsum sed. Lorem sea lorem vero. Sanct dolor clita clita rebum kasd magna erat diam</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->

  <!-- Blog Start -->
  <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Nuestros Blogs</h4>
            <h4 class="display-4 font-weight-bold">Articulos Destacados</h4>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5 blog-item">

                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 80px; height: 80px;">
                        <small>24</small>
                        <strong class="text-uppercase m-0 text-white">Agosto</strong>
                        <small>2023</small>
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold">La Importancia de una Buena Alimentación para una Vida Saludable</h3>
                        <div class="d-flex">
                            <small class="mr-2 text-muted"><i class="fa fa-user"></i> Administrador</small>

                        </div>
                    </div>
                </div>
                <p class="text-justify">La alimentación juega un papel fundamental en nuestra salud y bienestar. Una dieta equilibrada y nutritiva no solo nos proporciona la energía necesaria para llevar a cabo nuestras actividades diarias, sino que también es esencial para prevenir enfermedades y mantener un estilo de vida saludable. A continuación</p>
                <a class="btn btn-outline-primary mt-2 px-3" href="./blog.php">Mas Información <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="col-lg-6 mb-5 blog-item">

                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 80px; height: 80px;">
                        <small>24</small>
                        <strong class="text-uppercase m-0 text-white">Agosto</strong>
                        <small>2023</small>
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold">Los Beneficios del Ejercicio para una Vida Saludable</h3>
                        <div class="d-flex">
                            <small class="mr-2 text-muted"><i class="fa fa-user"></i> Administrador</small>

                        </div>
                    </div>
                </div>
                <p class="text-justify">El ejercicio físico regular no solo es esencial para mantener un cuerpo en forma, sino que también tiene un impacto profundo en nuestra salud mental y emocional. Desde la mejora de la condición cardiovascular hasta la reducción del estrés, los beneficios del ejercicio son numerosos y variados.</p>
                <a class="btn btn-outline-primary mt-2 px-3" href="./blog.php">Mas Información <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <?php include_once('./views/html/footer.php') ?>
    <!-- Footer End -->
    <!-- Calcular ICM-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calculateBtn = document.getElementById('calculate-btn');
            const resultDiv = document.getElementById('result');
            const weightInput = document.getElementById('weight');
            const heightInput = document.getElementById('height');
            const ageInput = document.getElementById('age');
            const genderSelect = document.getElementById('gender');

            calculateBtn.addEventListener('click', function() {
                const weight = parseFloat(weightInput.value);
                const height = parseFloat(heightInput.value); // Altura en metros
                const age = parseInt(ageInput.value);
                const gender = genderSelect.value;

                if (isNaN(weight) || isNaN(height) || isNaN(age) || gender === 'default') {
                    resultDiv.innerHTML = '<p class="text-danger">Por favor, completa todos los campos.</p>';
                    return;
                }

                const bmi = weight / (height * height);

                let interpretation = '';
                if (bmi < 18.5) {
                    interpretation = 'Bajo peso';
                } else if (bmi < 24.9) {
                    interpretation = 'Peso normal';
                } else if (bmi < 29.9) {
                    interpretation = 'Sobrepeso';
                } else {
                    interpretation = 'Obesidad';
                }

                resultDiv.innerHTML = `<p>Tu IMC es: ${bmi.toFixed(2)}</p><p>Interpretación: ${interpretation}</p>`;

                // Limpiar los campos de entrada
                weightInput.value = '';
                heightInput.value = '';
                ageInput.value = '';
                genderSelect.value = 'default';
            });
        });
    </script>

    <!-- Fin-->

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="./public/lib/easing/easing.min.js"></script>
    <script src="./public/lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="./public/mail/jqBootstrapValidation.min.js"></script>
    <script src="./public/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="./public/js/main.js"></script>
</body>

</html>