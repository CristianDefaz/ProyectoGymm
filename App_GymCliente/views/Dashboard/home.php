<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../html/head.php') ?>
    <style>
        .center-text {
            text-align: center;
            color: white;
        }
    </style>
</head>

<body class="bg-white">

    <?php include_once('../html/header.php')  ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../../public/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0">EVOLUTION GYM</h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">EL mejor Gimnasio</h2>

                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../../public/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0">EVOLUTION GYM</h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Pon tu cuerpo en forma</h2>

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
                    </p>

                    <img class="w-100" src="../../public/img/blog-2.jpg" alt="Image">
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
                    </p>

                    <img class="w-100" src="../../public/img/about.jpg" alt="Image">

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


    <!-- GYM Feature Start -->
    <div class="container feature pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Porqué escogernos?</h4>
            <h4 class="display-4 font-weight-bold">Beneficios del GYM</h4>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="../../public/img/feature-1.jpg" alt="Image">
                        <i class="flaticon-barbell"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Instructores </h4>
                        <p class="text-justify"> Instructores preparados para todas las rutinas de ejercicio</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="../../public/img/feature-2.jpg" alt="Image">
                        <i class="flaticon-support"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Sitio Amplio</h4>
                        <p class="text-justify">El gimnasio cuenta con la ventaja de estar ubicado en un sitio amplio y espacioso, lo que brinda a nuestros miembros un entorno excepcional para sus actividades físicas. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="../../public/img/feature-3.jpg" alt="Image">
                        <i class="flaticon-support"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Espacios de boxing</h4>
                        <p class="text-justify">Nuestro gimnasio ofrece instalaciones de primer nivel con espacios dedicados exclusivamente al boxeo. Estos espacios de boxeo están diseñados para brindar a nuestros miembros un ambiente auténtico y funcional para sus entrenamientos de boxeo y artes marciales.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="../../public/img/feature-4.jpg" alt="Image">
                        <i class="flaticon-barbell"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Maquinas Nuevas</h4>
                        <p class="text-justify">En nuestro gimnasio, nos enorgullece presentar una colección de máquinas de última generación. Hemos invertido en equipos de fitness de vanguardia para ofrecer a nuestros miembros una experiencia de entrenamiento excepcional.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GYM Feature End -->


    <!-- Subscribe Start -->

    <!-- <div class="subscribe container-fluid my-5 py-5 text-center">
        <h4 class="display-4 text-white font-weight-bold mt-5 mb-3">Subscribe Our Newsletter</h4>
        <p class="text-white mb-4">Subscribe and get Our latest article in your inbox</p>
        <form class="form-inline justify-content-center mb-5">
            <div class="input-group">
                <input type="text" class="form-control-lg" placeholder="Your Email">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                </div>
            </div>
        </form>
    </div>-->

    <!-- Subscribe End -->




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


<!--                                mostrar fecha membresia                        -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
<script>
    $(document).ready(function() {
        <?php
        session_start();

        // Asegúrate de que $_SESSION['bienvenida'] esté configurada correctamente
        if (isset($_SESSION['bienvenida'])) {
            echo "Swal.fire({
                icon: 'success',
                title: 'Bienvenida',
                text: '{$_SESSION['bienvenida']} Cargando información de membresía...',
            });";
            unset($_SESSION['bienvenida']); // Limpiar la variable de sesión
        }
        ?>

$.ajax({
    url: "../../controllers/membresia.controller.php?op=todos",
    success: function(membresiaCliente) {
        console.log(membresiaCliente); 
        const membresiaData = JSON.parse(membresiaCliente);
        
        if (membresiaData.length > 0 && membresiaData[0].men_fecha_fin) {
            const fechaFinMembresia = membresiaData[0].men_fecha_fin;
            const tiempoRestante = calcularTiempoRestante(fechaFinMembresia);

            Swal.fire({
                icon: 'success',
                title: 'Bienvenido',
                text: `<?php echo $_SESSION['bienvenido']; ?> Tu membresía expirará en ${tiempoRestante}.`,
            });
        } else {
            Swal.fire({
                icon: 'warning',
                title: 'No posee una membresía activa actualmente',
                text: 'No se encontró información de membresía para el cliente actual.',
            });
        }
    },
    error: function(xhr, status, error) {
        console.log(error); // Muestra cualquier error en la consola
    }
});


        function calcularTiempoRestante(fechaFinMembresia) {
            const fechaFin = new Date(fechaFinMembresia).getTime();
            console.log(fechaFin); 
            const fechaActual = new Date().getTime();
            const tiempoRestanteEnMilisegundos = fechaFin - fechaActual;

            const diasRestantes = Math.floor(tiempoRestanteEnMilisegundos / (1000 * 60 * 60 * 24));
            const horasRestantes = Math.floor((tiempoRestanteEnMilisegundos % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutosRestantes = Math.floor((tiempoRestanteEnMilisegundos % (1000 * 60 * 60)) / (1000 * 60));
            const segundosRestantes = Math.floor((tiempoRestanteEnMilisegundos % (1000 * 60)) / 1000);

            const tiempoRestanteFormateado = `${diasRestantes} días, ${horasRestantes} horas, ${minutosRestantes} minutos, ${segundosRestantes} segundos`;

            return tiempoRestanteFormateado;
        }
    });

</script>




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


    <!-- Footer -->
    <?php include_once('../html/footer.php') ?>
    <!-- End of Footer -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <?php include_once('../html/scripts.php')  ?>

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

</body>
</html>