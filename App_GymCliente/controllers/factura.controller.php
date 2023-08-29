<?php
error_reporting(0);
// TODO: Requerimientos
//require_once('../config/cors.php');
require_once('../models/factura.model.php');
require_once('../models/imagen.model.php');
$Factura = new facturaModel;
$subirfoto = new SubirFoto;

switch ($_GET['op']) {
  
    case 'todos':
        $todos = array();
        $datos = $Factura->todos();
        while ($fila = mysqli_fetch_assoc($datos)) {
            $todos[] = $fila;
        }
        echo json_encode($todos);
        break;


        case 'todos1':
            $todos = array();
            $datos = $Factura->todos1();
            while ($fila = mysqli_fetch_assoc($datos)) {
                $todos[] = $fila;
            }
            echo json_encode($todos);
            break;   

        case 'uno':
            $idfactura = $_POST['id_recibo'];
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
                    $estado = $_POST['estado'];
                    //procedimeinto para guardar la imagen en los archivos del proyecto
                    if ($_FILES['imagen'] != '') {
                        $imagen = $_FILES['imagen'];
                        $direccionimg = $subirfoto->guardar($imagen);
                        $imagen ='';
                        $imagen = $direccionimg;
                    }
                    $datos = array();
                    $datos = $Factura->Insertar($cliente,$fecha,$membresia,$monto,$estado,$imagen);
                    echo json_encode($datos);
                    break;


                    case 'actualizar':
                    $idfactura = $_POST['id_recibo'];
                    $cliente = $_POST['cli_id'];
                    $fecha = $_POST['fa_fecha'];
                    $membresia = $_POST['men_id'];
                    $monto = $_POST['fa_montol_total'];
                    $estado = $_POST['estado'];
                    //procedimeinto para guardar la imagen en los archivos del proyecto
                    if ($_FILES['imagen'] != '') {
                        $imagen = $_FILES['imagen'];
                        $direccionimg = $subirfoto->guardar($imagen);
                        $imagen ='';
                        $imagen = $direccionimg;
                    }
                    $datos = array();
                    $datos = $Factura->Actualizar($idfactura,$cliente,$fecha,$membresia,$monto,$estado,$imagen);
                    echo json_encode($datos);
                         break;
   
      

    case 'eliminar':
        $idfactura = $_POST['id_recibo'];
        $datos = array();
        $datos = $Factura->Eliminar($idfactura);
        echo json_encode($datos);
        break;
}
