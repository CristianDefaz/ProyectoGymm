<?php
//TODO: archivos requeridos
require_once('../config/config.php');
class TMembresiasModel
{
    public function todos(){  //TODO: CProcedimeinto para obtener todos los registros de la BDD
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT * FROM tipo_menbresia";
        $datos = mysqli_query($con,$cadena);
        return $datos;
    }

    public function Insertar($Tipo, $Descripcion, $Duracion, $Precio, $TCosto,$idempleado) {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "INSERT INTO `tipo_menbresia`(`tipo_menbresia`, `tipo_descripcion`, `tipo_duracion`, `tipo_precio_mensual`, `tipo_costo`,  `id_empleado`) VALUES ('$Tipo', '$Descripcion', '$Duracion', '$Precio', '$TCosto','$idempleado')";
        if (mysqli_query($con, $cadena)) {
            return 'ok';
        } else {
            return mysqli_error($con);
        }
    }
    
    public function uno($idTmenbresia){
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT *FROM `tipo_menbresia` where tipo_id = $idTmenbresia";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }

    public function Actualizar($idTmenbresia, $Tipo, $Descripcion, $Duracion, $Precio, $TCosto, $idempleado) {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "UPDATE `tipo_menbresia` SET `tipo_menbresia`='$Tipo', `tipo_descripcion`='$Descripcion', `tipo_duracion`='$Duracion', `tipo_precio_mensual`='$Precio', `tipo_costo`='$TCosto', `id_empleado`='$idempleado' WHERE tipo_id=$idTmenbresia";
        if (mysqli_query($con, $cadena)) {
            return 'ok';
        } else {
            return mysqli_error($con);
        }
    }
    
    
    public function Eliminar($idTmenbresia){
        $con = new ClaseConexion();
        $con=$con->ProcedimientoConectar();
        $cadena = "DELETE FROM `tipo_menbresia` WHERE tipo_id = $idTmenbresia ";
        if (mysqli_query($con, $cadena)){
            return 'ok';
        }else{
           
            return mysqli_error($con);
        }
    }

    public function consultavalor($idTipoMen){
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT  (`tipo_duracion` * `tipo_precio_mensual`) as costo FROM `tipo_menbresia` where tipo_id = $idTipoMen";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
}
    

