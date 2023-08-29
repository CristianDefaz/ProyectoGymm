<?php
//TODO: archivos requeridos
require_once('../config/config.php');
require_once('../config/sesiones.php');
//require_once('../models/imagen.model.php');

class facturaModel
{

    public function todos()
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cliente_id = $_SESSION["cliente_id"];
        $cadena = "SELECT * FROM recibos_membresia INNER JOIN cliente ON recibos_membresia.cli_id = cliente.cliente_id INNER JOIN tipo_menbresia ON recibos_membresia.men_id = tipo_menbresia.tipo_id Where cliente_id = $cliente_id and estado='Pendiente'" ;
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }

    public function todos1()
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cliente_id = $_SESSION["cliente_id"];
        $cadena = "SELECT * FROM recibos_membresia INNER JOIN cliente ON recibos_membresia.cli_id = cliente.cliente_id INNER JOIN tipo_menbresia ON recibos_membresia.men_id = tipo_menbresia.tipo_id Where cliente_id = $cliente_id and estado='Activo'" ;
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
    
    public function Insertar($cliente, $fecha, $membresia, $monto, $estado, $imagen) {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "INSERT INTO `recibos_membresia`(`cli_id`, `fa_fecha`, `men_id`, `fa_montol_total`, `estado`, `imagen`) VALUES ('$cliente','$fecha','$membresia','$monto','$estado','$imagen')";
        if (mysqli_query($con, $cadena)) {
            return 'ok';
        } else {
            return mysqli_error($con);
        }
    }
    
    
    public function uno($idfactura){
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT *FROM `recibos_membresia` INNER JOIN cliente ON recibos_membresia.cli_id = cliente.cliente_id INNER JOIN tipo_menbresia ON recibos_membresia.men_id = tipo_menbresia.tipo_id where id_recibo = $idfactura";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }

    public function Actualizar($idfactura, $cliente, $fecha, $membresia, $monto, $estado, $imagen) {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "UPDATE `recibos_membresia` SET `cli_id`='$cliente', `fa_fecha`='$fecha',`men_id`='$membresia', `fa_montol_total`='$monto', `estado`='$estado', `imagen`='$imagen' WHERE id_recibo=$idfactura";
       
        if (mysqli_query($con, $cadena)) {
            return 'ok';
        } else {
            return mysqli_error($con);
        }
    
    }

    public function consultafecha($fechaDesde, $fechaHasta) {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cliente_id = $_SESSION["cliente_id"];
        $cadena = "SELECT * FROM recibos_membresia INNER JOIN cliente ON recibos_membresia.cli_id = cliente.cliente_id INNER JOIN tipo_menbresia ON recibos_membresia.men_id = tipo_menbresia.tipo_id WHERE cliente_id = $cliente_id and fa_fecha BETWEEN '$fechaDesde' AND '$fechaHasta'";
        $datos = mysqli_query($con, $cadena);
        $facturasFiltradas = array();
        while ($row = mysqli_fetch_assoc($datos)) {
            $facturasFiltradas[] = $row;
        }
        
        return $facturasFiltradas;
    }
    
    
    
    public function Eliminar($idfactura){
        $con = new ClaseConexion();
        $con=$con->ProcedimientoConectar();
        $cadena = "DELETE FROM `recibos_membresia` WHERE id_recibo=$idfactura ";
        if (mysqli_query($con, $cadena)){
            return 'ok';
        }else{
           
            return mysqli_error($con);
        }
    }
}