<?php
error_reporting(0);
// TODO: Requerimientos
require_once('../config/sesiones.php');
require_once('../models/cliente.model.php');

$Cliente = new clienteModel;

switch ($_GET['op']) {
    case 'login':
        $correo = $_POST['cli_email'];
        $contrasena = $_POST['cli_contrasena'];
    
        if (empty($correo) || empty($contrasena)) {
            header("Location:../views/sesion/login.php?op=2");
            exit();
        }
    
        $res = $Cliente->login($correo, $contrasena);
    
        try {
            if (is_array($res) && count($res) > 0) {
                $_SESSION['cliente_id'] = $res['cliente_id'];
                $_SESSION['cli_cedula'] = $res['cli_cedula'];
                $_SESSION['cli_nombre'] = $res['cli_nombre'];
                $_SESSION['cli_apellido'] = $res['cli_apellido'];
                $_SESSION['cli_fecha_nacimiento'] = $res['cli_fecha_nacimiento'];
                $_SESSION['cli_genero'] = $res['cli_genero'];
                $_SESSION['cli_altura'] = $res['cli_altura'];
                $_SESSION['cli_peso'] = $res['cli_peso'];
                $_SESSION['cli_telefono'] = $res['cli_telefono'];
                $_SESSION['cli_direccion'] = $res['cli_direccion'];
                $_SESSION['cli_email'] = $res['cli_email'];
    
                $_SESSION['bienvenida'] = 'Bienvenido, ' . $res['cli_nombre'] . '! Has iniciado sesión exitosamente.';
                
                header('Location:../views/Dashboard/home.php');
                exit();
            } else {
                header("Location:../views/sesion/login.php?op=1");
                exit();
            }
        } catch (Throwable $th) {
            echo json_encode($th->getMessage());
        }
        break;

        case 'todos':
            $todos = array();
            $datos = $Cliente->todos();
            while ($fila = mysqli_fetch_assoc($datos)) {
                $todos[] = $fila;
            }
            echo json_encode($todos);
            break;
            case 'todos1':
                $todos = array();
                $datos = $Cliente->todos1();
                while ($fila = mysqli_fetch_assoc($datos)) {
                    $todos[] = $fila;
                }
                echo json_encode($todos);
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
        $correo = $_POST['cli_email'];
        $contrasena = $_POST['cli_contrasena'];
        $datos = array();
        $datos = $Cliente->InsertarR($cedula, $Nombres, $Apellidos, $fechanacimiento, $genero, $altura, $peso, $telefono, $direccion,$correo,$contrasena);
        echo json_encode($datos);
        
}
