<?php
error_reporting(0);
// TODO: Requerimientos
//require_once('../config/sesiones.php');
require_once('../models/membresia.model.php');
$Membresia = new MembresiasModel;
error_reporting(0); echo  $_SESSION["em_id"];
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

        case 'uno':
            $idmembresia = $_POST['men_id'];
            $datos = array();
            $datos = $Membresia->uno($idmembresia);
            $respuesta = mysqli_fetch_assoc($datos);
            echo json_encode($respuesta);
            break;

            


    case 'insertar':
        $idcliente = $_POST['cliente_id'];
        $idtmembresia= $_POST['tipo_id'];
        $fechainicio = $_POST['men_fecha_inicio'];
        $fechafin = $_POST['men_fecha_fin'];
        $estado = $_POST['men_estado'];
        $datos = array();
        $datos = $Membresia->Insertar($idcliente, $idtmembresia, $fechainicio, $fechafin, $estado);
        echo json_encode($datos);
        break;

    case 'actualizar':
        $idmembresia= $_POST['men_id'];
        $idcliente = $_POST['cliente_id'];
        $idtmembresia= $_POST['tipo_id'];
        $fechainicio = $_POST['men_fecha_inicio'];
        $fechafin = $_POST['men_fecha_fin'];
        $estado = $_POST['men_estado'];
        $datos = array();
        $datos = $Membresia->Actualizar($idmembresia, $idcliente, $idtmembresia, $fechainicio, $fechafin, $estado);
        echo json_encode($datos);
        break;

        case 'actualizarme':
            $idmembresia= $_POST['men_id'];
            $estado = $_POST['men_estado'];
            $datos = array();
            $datos = $Membresia->ActualizarMe($idmembresia,$estado);
            echo json_encode($datos);
            break;

    case 'eliminar':
        $idmembresia = $_POST['men_id'];
        $datos = array();
        $datos = $Membresia->Eliminar($idmembresia);
        echo json_encode($datos);
        break;


        
}
