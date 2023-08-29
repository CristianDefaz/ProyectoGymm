<?php
error_reporting(0);
// TODO: Requerimientos
require_once('../config/cors.php');
require_once('../models/factura.model.php');
error_reporting(0); echo  $_SESSION["em_id"];
$Factura = new facturaModel;

switch ($_GET['op']) {
  
    case 'todos':
        $todos = array();
        $datos = $Factura->todos();
        while ($fila = mysqli_fetch_assoc($datos)) {
            $todos[] = $fila;
        }
        echo json_encode($todos);
        break;

        case 'uno':
            $idfactura = $_POST['factura_id'];
            $datos = array();
            $datos = $Factura->uno($idfactura);
            $respuesta = mysqli_fetch_assoc($datos);
            echo json_encode($respuesta);
            break;


            case 'filtrarPorFecha':
                // Obtener las fechas desde la solicitud AJAX
                $fechaDesde = $_POST['fechaDesde'];
                $fechaHasta = $_POST['fechaHasta'];      
                // Realizar la lógica para obtener los datos de las facturas filtradas por fechas
                // Aquí debes adaptar el código para que se ajuste a tu estructura de datos y lógica de consulta       
                $facturasFiltradas = $Factura->consultafecha($fechaDesde, $fechaHasta);       
                // Devolver las facturas filtradas como respuesta JSON
                echo json_encode($facturasFiltradas);
                break;        
            // Agrega otros casos (operaciones) aquí si es necesario
            default:
                // Manejar caso por defecto si no se proporciona una operación válida
                echo "Operación no válida";
                break;
                

    case 'insertar':
        $cliente = $_POST['cli_id'];
        $fecha = $_POST['fa_fecha'];
        $membresia = $_POST['men_id'];
        $monto = $_POST['fa_montol_total'];
        $empleado = $_POST['id_empleado'];
        $datos = array();
        $datos = $Factura->Insertar($cliente,$fecha,$membresia ,$monto, $empleado);
        echo json_encode($datos);
        break;

    case 'actualizar':
       $idfactura = $_POST['factura_id'];
        $cliente = $_POST['cli_id'];
        $fecha = $_POST['fa_fecha'];
        $membresia = $_POST['men_id'];
        $monto = $_POST['fa_montol_total'];
        $empleado = $_POST['id_empleado'];
        $datos = array();
        $datos = $Factura->Actualizar( $idfactura, $cliente, $empleado,$membresia, $fecha, $monto);
        echo json_encode($datos);
        break;
      

    case 'eliminar':
        $idfactura = $_POST['factura_id'];
        $datos = array();
        $datos = $Factura->Eliminar($idfactura);
        echo json_encode($datos);
        break;
}
