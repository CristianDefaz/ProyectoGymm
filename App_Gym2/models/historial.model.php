<?php
//TODO: archivos requeridos
require_once('../config/config.php');
//require_once('../models/empleadosroles.model.php');

class historialModel
{

    public function todos(){  
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT * FROM `auditoria` ORDER BY em_nombre";
        $datos = mysqli_query($con,$cadena);
        return $datos;
    }
    
    
}