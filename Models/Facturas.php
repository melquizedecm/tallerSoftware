<?php

require_once '../lib/consultas.php';

class Factura{
    var $id;
    var $id_cliente;
    var $id_comision;
    var $fecha;
    var $estado;
    var $total;
    
    function __construct($id,$id_cliente, $id_comision, $fecha, $estado, $total) {
        $this->id=$id;
        $this->id_cliente = $id_cliente;
        $this->id_comision = $id_comision;
        $this->fecha = $fecha;
        $this->estado = $estado;
        $this->total = $total;
    }
    
    function create(){
        $sql = "INSERT INTO factura(id_cliente,id_comision,fecha,estado,total) VALUES (".$this->id_cliente.",".$this->id_comision.",'".$this->fecha."','".$this->estado."',".$this->total.")";
        $response = getResultSQL($sql);
        if (!$response) {
            print_r($response);
            return false;
        } else {
            print_r($response);
            return true;
        }
    }
    
    function read(){
        $sql = "SELECT * FROM factura WHERE id=".$this->id."";
        $response = getResultSQL($sql);
        if (!$response) {
            return false;
        } else {
            return true;
        }
    }
    
    function update(){
        $sql = "UPDATE factura SET id_cliente=".$this->id_cliente.",id_comision=".$this->id_comision.",fecha='".$this->fecha."',estado='".$this->estado."',total".$this->total.")";
        $response = getResultSQL($sql);
        if (!$response) {
            return false;
        } else {
            return true;
        }
    }
    
    function delete(){
        $sql = "DELETE FROM factura WHERE id=".$this->id."";
        $response = getResultSQL($sql);
        if (!$response) {
            return false;
        } else {
            return true;
        }
    }
}
