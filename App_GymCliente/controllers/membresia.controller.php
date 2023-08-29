<?php
error_reporting(0);
// TODO: Requerimientos
//require_once('../config/sesiones.php');
require_once('../models/membresia.model.php');
$Membresia = new MembresiasModel;

switch ($_GET['op']) {

    case 'todos':
        $todos = array();
        $datos = $Membresia->todos();
        while ($fila = mysqli_fetch_assoc($datos)) {
            $todos[] = $fila;
        }
        echo json_encode($todos);
        break;

        case 'todos1':
            $todos = array();
            $datos = $Membresia->todos1();
            while ($fila = mysqli_fetch_assoc($datos)) {
                $todos[] = $fila;
            }
            echo json_encode($todos);
            break;    
    
}
