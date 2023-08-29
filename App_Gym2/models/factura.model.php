<?php
//TODO: archivos requeridos
require_once('../config/config.php');
//require_once('../models/empleadosroles.model.php');

class facturaModel
{

   public function todos()
    {
        $con = new ClaseConexion();
        $con=$con->ProcedimientoConectar();
        $cadena = "SELECT * FROM facturas INNER JOIN cliente ON facturas.cli_id = cliente.cliente_id INNER JOIN tipo_menbresia ON facturas.men_id = tipo_menbresia.tipo_id INNER JOIN empleado ON facturas.id_empleado = empleado.em_id  ORDER BY cliente.cli_nombre";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }

    public function Insertar($cedula, $fecha,$membresia, $monto,$empleado) {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "INSERT INTO `facturas`(`cli_id`,`fa_fecha`,`men_id`,`fa_montol_total`,`id_empleado`) VALUES ('$cedula', '$fecha','$membresia', '$monto','$empleado')";
     
        if (mysqli_query($con, $cadena)) {
           return 'ok';

        } else {
            return mysqli_error($con);
        }
    }
    
    public function uno($idfactura){
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT *FROM `facturas`  INNER JOIN cliente ON facturas.cli_id = cliente.cliente_id INNER JOIN empleado ON facturas.id_empleado = empleado.em_id  INNER JOIN tipo_menbresia ON facturas.men_id = tipo_menbresia.tipo_id where factura_id = $idfactura";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }

    public function Actualizar($idfactura, $cliente, $empleado,$membresia, $fecha, $monto) {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "UPDATE `facturas` SET `cli_id`=$cliente, `fa_fecha`='$fecha',`men_id`=$membresia, `fa_montol_total`=$monto,`id_empleado`=$empleado WHERE factura_id=$idfactura";
       
        if (mysqli_query($con, $cadena)) {
            return 'ok';
        } else {
            return mysqli_error($con);
        }
    
    }

    public function consultafecha($fechaDesde, $fechaHasta) {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT * FROM facturas INNER JOIN cliente ON facturas.cli_id = cliente.cliente_id INNER JOIN tipo_menbresia ON facturas.men_id = tipo_menbresia.tipo_id INNER JOIN empleado ON facturas.id_empleado = empleado.em_id WHERE fa_fecha BETWEEN '$fechaDesde' AND '$fechaHasta'";
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
        $cadena = "DELETE FROM `facturas` WHERE factura_id=$idfactura ";
        if (mysqli_query($con, $cadena)){
            return 'ok';
        }else{
           
            return mysqli_error($con);
        }
    }
}