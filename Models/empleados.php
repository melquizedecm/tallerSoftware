<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class empleados {
    //Actualización del sistema...
    var $id;
    var $nombre;
    var $status;
    
    function __construct($id, $nombre, $status) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->status = $status;
    }
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setStatus($status) {
        $this->status = $status;
    }

}

?>
