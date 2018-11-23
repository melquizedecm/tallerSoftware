<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Comision{
    
    var $porcentaje;
    var $fecha;
    
    function __construct($porcentaje, $fecha) {
        $this->porcentaje = $porcentaje;
        $this->fecha = $fecha;
        
    }
    
    function create(){
        $sql = "INSERT INTO empleado(porcentaje,fecha) VALUES ('".$this->porcentaje."','".$this->fecha."')";
        $response = getResultSQL($sql);
        if (!$response) {
            return false;
        } else {
            return true;
        }
    }
    
    function getPorcentje() {
        return $this->porcentaje;
    }

    function setPorcentje() {
        return $this->username;
    }

    function getFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

 
    


}