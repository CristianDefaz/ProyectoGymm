<?php
class SubirFoto{
    public function guardar($imagen){
        $destino = '../../facturas/'. $_FILES["imagen"]["name"];
        copy($_FILES["imagen"]["tmp_name"],$destino);
        return '../'.$destino;
    } 
}