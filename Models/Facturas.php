<?php

class Factura{
    var $id;
    var $id_cliente;
    var $id_comision;
    var $fecha;
    var $estado;
    var $total;
    
    function __construct($id, $id_cliente, $id_comision, $fecha, $estado, $total) {
        
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
            return false;
        } else {
            return true;
        }
    }

    
    
}
