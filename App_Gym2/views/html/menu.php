<?php include_once('../../config/sesiones.php') ?>



<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../Dashboard/">

        <div class="sidebar-brand-text mx-3">EVOLUTION GYM
            <img class="rounded-circle" src="https://svgsilh.com/svg_v2/1048852.svg">
        </div>

        <style>
            .rounded-circle {
                border-radius: 50%;
                width: 40px;
                /* Ajusta el tamaño de la imagen según tus necesidades */
                height: 50px;
            }
        </style>

    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="../Dashboard/home.php">
            <i class="fas fa-fw fa-sticky-note"></i>
            <span>Menu</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu General
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- Nav Item - Pages Collapse Menu - Usuarios -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsuarios" aria-expanded="false" aria-controls="collapseUsuarios">
            <i class="fas fa-fw fa-table"></i>
            <span>Usuarios</span>
        </a>
        <div id="collapseUsuarios" class="collapse" aria-labelledby="headingUsuarios" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu</h6>
                <?php
                $rol_id = $_SESSION['rol_id'];


                if ($rol_id == '2') {
                    echo '<a class="collapse-item" href="../Clientes/cliente.views.php">Clientes</a>';
                } elseif ($rol_id == '1') {
                    echo '<a class="collapse-item" href="../Empleados/empleados.views.php">Empleados</a>';
                    echo '<a class="collapse-item" href="../Clientes/cliente.views.php">Clientes</a>';
                }

                ?>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu - Otro Menú -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsememmbresia" aria-expanded="false" aria-controls="collapsememmbresia">
            <i class="fas fa-fw fa-table"></i>
            <span>Membresias</span>
        </a>
        <div id="collapsememmbresia" class="collapse" aria-labelledby="headingmembresia" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu</h6>
                <?php

                $rol_id = $_SESSION['rol_id'];

                if ($rol_id == '2') {
                    echo '<a class="collapse-item" href="../Membresias/Membresias.views.php">Membresias Activas</a>';
                    echo '<a class="collapse-item" href="../MembresiaExpirada/Emembresia.views.php">Membresia Expiradas</a>';
                    echo '<a class="collapse-item" href="../ReciboMembresia/recibom.views.php">Activación Membresias</a>';
                } elseif ($rol_id == '1') {
                    echo '<a class="collapse-item" href="../Tipo_Membresias/Tipo.Membresias.views.php">Tipo Membresia</a>';
                    echo '<a class="collapse-item" href="../Membresias/Membresias.views.php">Membresias Activas</a>';
                    echo '<a class="collapse-item" href="../MembresiaExpirada/Emembresia.views.php">Membresia Expiradas</a>';
                    echo '<a class="collapse-item" href="../ReciboMembresia/recibom.views.php">Activación Membresias</a>';
                }

                ?>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu - Otro Menú -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefac" aria-expanded="false" aria-controls="collapsefac">
            <i class="fas fa-fw fa-table"></i>
            <span>Facturacion</span>
        </a>
        <div id="collapsefac" class="collapse" aria-labelledby="headingmembresia" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu</h6>
                <?php

                $rol_id = $_SESSION['rol_id'];

                if ($rol_id == '2') {
                    echo '<a class="collapse-item" href="../Facturas/facturas.views.php">Recibos</a>';
                } elseif ($rol_id == '1') {
                    echo '<a class="collapse-item" href="../Facturas/facturas.views.php">Recibos</a>';
                    echo '<a class="collapse-item" href="../TablasMonto/TablaMonto.views.php">Tabla Monto</a>';
                }

                ?>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu - Otro Menú -->
    <?php

    $rol_id = $_SESSION['rol_id'];
    if ($rol_id == '1') {
        echo '<li class="nav-item">
        <a class="nav-link" href="../Historial/historial.view.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Historial</span>
        </a>
    </li>';
    }
    
    
    if ($rol_id == '1') {
        echo '<li class="nav-item">
        <a class="nav-link" href="../Publicidad/Publicidad.views.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Publicidad</span>
        </a>
    </li>';
    }

    ?>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->


    <!-- Sidebar Message -->

</ul>