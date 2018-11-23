<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST['buttonCreate'])) {
    require_once '../lib/links.php';
    libnivel2();
    $controller = new PerfilesControler();
    $controller->create();
} elseif (isset($_POST['buttonRead'])) {
    
} elseif (isset($_POST['buttonUpdate'])) {
    
} elseif (isset($_POST['buttonDelete'])) {
    
} else {
    header("location:../menu/");
}

class PerfilesControler {

    function create() {
        ///1. recibir variables
        $nombre = $_POST['inputNombre'];
        //2. llamar al Modelo
        require_once '../models/Perfil.php';
        $perfil = new Perfil($nombre,"1","1","1");
        $perfil->create();
    }

    function read() {
        
    }

    function update() {
        
    }

    function delete() {
        
    }

}

?>