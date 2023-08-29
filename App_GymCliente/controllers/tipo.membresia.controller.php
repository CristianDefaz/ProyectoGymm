<?php
error_reporting(0);
//TODO: Requerimeintos
require_once('../Config/sesiones.php');
require_once('../models/tipo.membresia.model.php');
$tMembresias = new TMembresiasModel; //TODO:Declaracion de variable
switch ($_GET['op']) {  //TODO: Clausula de desicion para obtener variable tipo GET

    case 'todos':
        $datos = array();
        $datos = $tMembresias->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;

        case 'uno':
            $idTmenbresia = $_POST['tipo_id'];
            $datos = array();
            $datos = $tMembresias->uno($idTmenbresia);
            $respuesta = mysqli_fetch_assoc($datos);
            echo json_encode($respuesta);
            break;

        case 'consultavalor':
                $idTipoMen = $_POST['idTipoMen'];
                $datos = array();
                $datos = $tMembresias->consultavalor($idTipoMen);
                $respuesta = mysqli_fetch_assoc($datos);
                echo json_encode($respuesta);
                break;

        case 'insertar':
            $Tipo = $_POST['tipo_menbresia'];
            $Descripcion = $_POST['tipo_descripcion'];
            $Duracion = $_POST['tipo_duracion'];
            $Precio = $_POST['tipo_precio_mensual'];
            $TCosto = $_POST['tipo_costo'];
            $idempleado = $_POST['id_empleado'];
            $datos = array();
            $datos = $tMembresias->Insertar($Tipo, $Descripcion, $Duracion, $Precio, $TCosto, $idempleado);
            echo json_encode($datos);
            break;
        
        case 'actualizar':
            $idTmenbresia = $_POST['tipo_id'];
            $Tipo = $_POST['tipo_menbresia'];
            $Descripcion = $_POST['tipo_descripcion'];
            $Duracion = $_POST['tipo_duracion'];
            $Precio = $_POST['tipo_precio_mensual'];
            $TCosto = $_POST['tipo_costo'];
            $idempleado = $_POST['id_empleado'];
            $datos = array();
            $datos = $tMembresias->Actualizar($idTmenbresia, $Tipo, $Descripcion, $Duracion, $Precio, $TCosto, $idempleado);
            echo json_encode($datos);
            break;
        
        case 'eliminar':
            $idTmenbresia = $_POST['tipo_id'];
            $datos = array();
            $datos = $tMembresias->Eliminar($idTmenbresia);
            echo json_encode($datos);
            break;
        
}
