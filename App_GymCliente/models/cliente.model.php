<?php
//TODO: archivos requeridos
require_once('../config/config.php');
require_once('../config/sesiones.php');
//require_once('../models/empleadosroles.model.php');

class clienteModel
{
   public function login($correo, $contrasena)
   {
       $con = new ClaseConexion();
       $con = $con->ProcedimientoConectar();
       $cadena = "SELECT * FROM cliente WHERE cli_email = '$correo'";
       $datos = mysqli_query($con, $cadena);
   
       // Verifica si se encontró un registro con el correo electrónico proporcionado
       if (mysqli_num_rows($datos) > 0) {
           $cliente = mysqli_fetch_assoc($datos);
           $contrasenaEncriptada = $cliente['cli_contrasena'];
   
           // Utiliza password_verify() para desencriptar y comparar la contraseña
           if (password_verify($contrasena, $contrasenaEncriptada)) {
               return $cliente; // Retorna el registro del empleado si la contraseña coincide
           }
       }
   
       return null; // Retorna null si no se encontró el empleado o la contraseña no coincide
   }
   
   public function todos()
   {
       $con = new ClaseConexion();
       $con=$con->ProcedimientoConectar();
       $cliente_id = $_SESSION["cliente_id"];
       $cadena = "SELECT * FROM `cliente` Where cliente_id = $cliente_id";
       $datos = mysqli_query($con, $cadena);
       return $datos;
   }


   public function todos1()
   {
       $con = new ClaseConexion();
       $con=$con->ProcedimientoConectar();
       $cadena = "SELECT * FROM cliente";
       $datos = mysqli_query($con, $cadena);
       return $datos;
   }

public function InsertarR($cedula, $Nombres, $Apellidos, $fechanacimiento, $genero, $altura, $peso, $telefono, $direccion,$correo,$contrasena,$empleado ) {
    $con = new ClaseConexion();
    $con = $con->ProcedimientoConectar();

     // Encriptar la contraseña utilizando password_hash()
     $contrasenaEncriptada = password_hash($contrasena, PASSWORD_DEFAULT);

    $cadena = "INSERT INTO `cliente`(`cli_cedula`, `cli_nombre`, `cli_apellido`, `cli_fecha_nacimiento`, `cli_genero`, `cli_altura`, `cli_peso`, `cli_telefono`, `cli_direccion`, `cli_email`, `cli_contrasena`,`id_empleado`) VALUES ('$cedula', '$Nombres', '$Apellidos', '$fechanacimiento', '$genero', '$altura', '$peso', '$telefono', '$direccion','$correo','$contrasenaEncriptada','$empleado')";
    if (mysqli_query($con, $cadena)) {
        return 'ok';
    } else {
        return mysqli_error($con);
    }
}
 /* public function Actualizar($idempleado,$Nombres, $Apellidos,$cedula, $telefono, $em_correo, $em_contrasena, $idRoles){
        $con = new ClaseConexion();
        $con=$con->ProcedimientoConectar();
        $cadena = "UPDATE `empleado` SET `em_nombre`='$Nombres',`em_apellido`='$Apellidos',`em_cedula`='$cedula',`em_telefono`='$telefono',`em_correo`='$em_correo',`em_contrasena`='$em_contrasena',`rol_id`='$idRoles' WHERE em_id=$idempleado";
        if (mysqli_query($con, $cadena)){
            return 'ok';
        }else{
            return mysqli_error($con);
        }
    }*/


}