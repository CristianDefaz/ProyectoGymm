<?php
//TODO: archivos requeridos
require_once('../config/config.php');
//require_once('../models/empleadosroles.model.php');

class MembresiasModel
{

    public function todos(){  
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT * FROM membresia INNER JOIN cliente on  membresia.cliente_id = cliente.cliente_id INNER JOIN tipo_menbresia on membresia.tipo_id=tipo_menbresia.tipo_id WHERE membresia.men_estado='Activo' ORDER BY men_id ";
        $datos = mysqli_query($con,$cadena);
        return $datos;
    }
    public function todos1(){  
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT * FROM membresia INNER JOIN cliente on  membresia.cliente_id = cliente.cliente_id INNER JOIN tipo_menbresia on membresia.tipo_id=tipo_menbresia.tipo_id WHERE membresia.men_estado='Expirado' ORDER BY men_id ";
        $datos = mysqli_query($con,$cadena);
        return $datos;
    }
    public function Insertar($idcliente, $idtmembresia, $fechainicio, $fechafin, $estado) {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "INSERT INTO `membresia`(`cliente_id`, `tipo_id`, `men_fecha_inicio`, `men_fecha_fin`, `men_estado`) VALUES ('$idcliente', '$idtmembresia', '$fechainicio', '$fechafin', '$estado')";
        if (mysqli_query($con, $cadena)) {
            return 'ok';
        } else {
            return mysqli_error($con);
        }
    }
    
    public function uno($idmembresia){
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT *FROM `membresia` where men_id= $idmembresia";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }

    public function Actualizar($idmembresia, $idcliente, $idtmembresia, $fechainicio, $fechafin, $estado) {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar(); 
        $cadena = "UPDATE `membresia` SET `cliente_id`='$idcliente', `tipo_id`='$idtmembresia', `men_fecha_inicio`='$fechainicio', `men_fecha_fin`='$fechafin', `men_estado`='$estado' WHERE men_id=$idmembresia";
        if (mysqli_query($con, $cadena)) {
            return 'ok';
        } else {
            return mysqli_error($con);
        }
    }
    
    public function ActualizarMe($idmembresia,$estado) {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar(); 
        $cadena = "UPDATE `membresia` SET `men_estado`='$estado' WHERE men_id=$idmembresia";
        if (mysqli_query($con, $cadena)) {
            return 'ok';
        } else {
            return mysqli_error($con);
        }
    }
    public function Eliminar($idmembresia){
        $con = new ClaseConexion();
        $con=$con->ProcedimientoConectar();
        $cadena = "DELETE FROM `membresia` WHERE men_id=$idmembresia";
        if (mysqli_query($con, $cadena)){
            return 'ok';
        }else{
           
            return mysqli_error($con);
        }
    }
    
}