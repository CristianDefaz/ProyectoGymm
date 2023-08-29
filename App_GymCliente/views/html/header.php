<!-- Navbar Start -->   
<?php include_once('../../config/sesiones.php') ?>
<div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="" class="navbar-brand">
                <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">Gymnasio</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4 bg-secondary">
                    <a href="../Dashboard/home.php" class="nav-item nav-link active">Menu</a>
                    <a href="../Dashboard/about.php" class="nav-item nav-link">Nosotros</a>
                    <a href="../Dashboard/blog.php" class="nav-item nav-link">Salud y Bienestar</a>
                    <a href="../Dashboard/feature.php" class="nav-item nav-link">Informacion de Membresias</a>
                    
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Comprar Membresias
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="../../views/ReciboMembresia/recibom.views.php">Compras pendientes</a>
                            <a class="dropdown-item" href="../../views/Historialrecibo/historialrecibo.php">Historial compras activas</a>
                        </div>
                    </div>
                    
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Membresias
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="../../views/Membresias/Membresia.views.php">Activas</a>
                            <a class="dropdown-item" href="../../views/Membresia expirada/membresiaex.views.php">Expiradas</a>
                        </div>
                    </div>

                    <a href="../Dashboard/contact.php" class="nav-item nav-link">Contacto</a>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php error_reporting(0); echo  $_SESSION['cli_nombre'] . ' ' .$_SESSION ['cli_apellido']?></span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="../html/salir.php">Cerrar sesion</a>
                            </div>
                        </div>
                </div>

            </div>
        </nav>
    </div>
    <!-- Navbar End -->