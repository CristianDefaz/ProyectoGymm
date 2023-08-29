<?php
error_reporting(0);
// TODO: Requerimientos
require_once('../config/sesiones.php');
require_once('../models/empleados.model.php');
$Usuario = new empleadoModel;

switch ($_GET['op']) {
    case 'login':
        $em_correo = $_POST['em_correo'];
        $em_contrasena = $_POST['em_contrasena'];
    
        if (empty($em_correo) || empty($em_contrasena)) {
            header("Location:../index.php?op=2");
            exit();
        }
    
        $res = $Usuario->login($em_correo, $em_contrasena);
    
        try {
            if (is_array($res) && count($res) > 0) {
                $_SESSION['em_id'] = $res['em_id'];
                $_SESSION['em_nombre'] = $res['em_nombre'];
                $_SESSION['em_apellido'] = $res['em_apellido'];
                $_SESSION['em_cedula'] = $res['em_cedula'];
                $_SESSION['em_telefono'] = $res['em_telefono'];
                $_SESSION['em_correo'] = $res['em_correo'];
                $_SESSION['rol_id'] = $res['rol_id'];
                $_SESSION['rol_nombre'] = $res['rol_nombre'];
    
                header('Location:../views/Dashboard/home.php');
                exit();
            } else {
                header("Location:../index.php?op=1");
                exit();
            }
        } catch (Throwable $th) {
            echo json_encode($th->getMessage());
        }
        break;
    
    case 'todos':
        $todos = array();
        $datos = $Usuario->todos();
        while ($fila = mysqli_fetch_assoc($datos)) {
            $todos[] = $fila;
        }
        echo json_encode($todos);
        break;

        case 'uno':
            $idempleado = $_POST['em_id'];
            $datos = array();
            $datos = $Usuario->uno($idempleado);
            $respuesta = mysqli_fetch_assoc($datos);
            echo json_encode($respuesta);
            break;

    case 'insertar':
        $Nombres = $_POST['em_nombre'];
        $Apellidos = $_POST['em_apellido'];
        $cedula = $_POST['em_cedula'];
        $telefono = $_POST['em_telefono'];
        $em_correo = $_POST['em_correo'];
        $em_contrasena = $_POST['em_contrasena'];
        $idRoles = $_POST['rol_id'];
        $datos = array();
        $datos = $Usuario->Insertar($Nombres, $Apellidos, $cedula, $telefono, $em_correo, $em_contrasena, $idRoles);
        echo json_encode($datos);
        break;
        

    case 'actualizar':
        $idempleado = $_POST['em_id'];
        $Nombres = $_POST['em_nombre'];
        $Apellidos = $_POST['em_apellido'];
        $cedula = $_POST['em_cedula'];
        $telefono = $_POST['em_telefono'];
        $em_correo = $_POST['em_correo'];
        $em_contrasena = $_POST['em_contrasena'];
        $idRoles = $_POST['rol_id'];
        $datos = array();
        $datos = $Usuario->Actualizar($idempleado, $Nombres, $Apellidos, $cedula, $telefono, $em_correo, $em_contrasena, $idRoles);
        echo json_encode($datos);
        break;

    case 'eliminar':
        $idempleado = $_POST['em_id'];
        $datos = array();
        $datos = $Usuario->Eliminar($idempleado);
        echo json_encode($datos);
        break;
}
