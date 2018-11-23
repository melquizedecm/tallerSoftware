<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST['buttonCreate'])) {
    require_once '../lib/links.php';
    libnivel2();
    $empleadosController = new EmpleadosController();
    $empleadosController->create();
} elseif (isset($_POST['buttonRead'])) {
    
} elseif (isset($_POST['buttonUpdate'])) {
    
} elseif (isset($_POST['buttonDelete'])) {
    
} else {
    header("location:../menu/");
}

class PerfilesControler {

    function create() {
        ///1. recibir variables
        $id = $_POST['inputId'];
        $nombre = $_POST['inputNombre'];
        $status = $_POST['inputStatus'];
        //2. llamar al Modelo
        require_once '.../Models/empleados.php';
        $empleado = new empleados($id,$nombre,$status);
        $empleado->create();
    }

    function read() {
        
    }

    function update() {
        
    }

    function delete() {
        
    }

}

?>