<?php
//TODO: archivos requeridos
error_reporting(0);
require_once('../config/config.php');
require_once('../config/sesiones.php');


//require_once('../models/empleadosroles.model.php');

class MembresiasModel
{

    public function todos()
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        // Make sure to use proper concatenation within the SQL query
        $cliente_id = $_SESSION["cliente_id"];
        $cadena = "SELECT * FROM membresia INNER JOIN cliente ON membresia.cliente_id = cliente.cliente_id INNER JOIN tipo_menbresia ON membresia.tipo_id = tipo_menbresia.tipo_id WHERE membresia.cliente_id = $cliente_id AND membresia.men_estado = 'Activo' ORDER BY men_id";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }

    public function todos1()
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        // Make sure to use proper concatenation within the SQL query
        $cliente_id = $_SESSION["cliente_id"];
        $cadena = "SELECT * FROM membresia INNER JOIN cliente ON membresia.cliente_id = cliente.cliente_id INNER JOIN tipo_menbresia ON membresia.tipo_id = tipo_menbresia.tipo_id WHERE membresia.cliente_id = $cliente_id AND membresia.men_estado = 'Expirado' ORDER BY men_id";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
}