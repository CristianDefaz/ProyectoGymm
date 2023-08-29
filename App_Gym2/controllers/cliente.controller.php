<?php
error_reporting(0);
// TODO: Requerimientos
//require_once('../config/sesiones.php');
require_once('../models/cliente.model.php');
$Cliente = new clienteModel;
error_reporting(0); echo  $_SESSION["em_id"];
switch ($_GET['op']) {

    case 'todos':
        $todos = array();
        $datos = $Cliente->todos();
        while ($fila = mysqli_fetch_assoc($datos)) {
            $todos[] = $fila;
        }
        echo json_encode($todos);
        break;

        case 'uno':
            $idcliente = $_POST['cliente_id'];
            $datos = array();
            $datos = $Cliente->uno($idcliente);
            $respuesta = mysqli_fetch_assoc($datos);
            echo json_encode($respuesta);
            break;

    case 'insertar':
        $cedula = $_POST['cli_cedula'];
        $Nombres = $_POST['cli_nombre'];
        $Apellidos = $_POST['cli_apellido'];
        $fechanacimiento = $_POST['cli_fecha_nacimiento'];
        $genero = $_POST['cli_genero'];
        $altura = $_POST['cli_altura'];
        $peso = $_POST['cli_peso'];
        $telefono = $_POST['cli_telefono'];
        $direccion = $_POST['cli_direccion'];
        $correo = $_POST['cli_correo'];
        $contrasena= $_POST['cli_contrasena'];
        $idempleado = $_POST['id_empleado'];
        $datos = array();
        $datos = $Cliente->Insertar($cedula, $Nombres, $Apellidos, $fechanacimiento, $genero, $altura, $peso, $telefono, $direccion,$correo,$contrasena,$idempleado);
        echo json_encode($datos);
        break;

    case 'actualizar':
        $idcliente = $_POST['cliente_id'];
        $cedula = $_POST['cli_cedula'];
        $Nombres = $_POST['cli_nombre'];
        $Apellidos = $_POST['cli_apellido'];
        $fechanacimiento = $_POST['cli_fecha_nacimiento'];
        $genero = $_POST['cli_genero'];
        $altura = $_POST['cli_altura'];
        $peso = $_POST['cli_peso'];
        $telefono = $_POST['cli_telefono'];
        $direccion = $_POST['cli_direccion'];
        $correo = $_POST['cli_correo'];
        $contrasena= $_POST['cli_contrasena'];
        $idempleado = $_POST['id_empleado'];
        $datos = array();
        $datos = $Cliente->Actualizar($idcliente, $cedula, $Nombres, $Apellidos, $fechanacimiento, $genero, $altura, $peso, $telefono, $direccion,$correo,$contrasena,$idempleado);
        echo json_encode($datos);
        break;

    case 'eliminar':
        $idcliente = $_POST['cliente_id'];
        $datos = array();
        $datos = $Cliente->Eliminar($idcliente);
        echo json_encode($datos);
        break;


        
}
