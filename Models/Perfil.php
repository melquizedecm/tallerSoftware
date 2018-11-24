<?php
require_once '../lib/consultas.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Perfil{
    
    var $nombre;
    var $permiso_gestionar_usuarios;
    var $permiso_vender;
    var $permiso_gestionar_perfiles;
    
    
    
    function __construct($nombre, $permiso_gestionar_usuarios,$permiso_vender,$permiso_gestionar_perfiles) {
        $this->nombre = $nombre;
        $this->permiso_gestionar_usuarios = $permiso_gestionar_usuarios;
        $this->permiso_vender = $permiso_vender;
        $this->permiso_gestionar_perfiles = $permiso_gestionar_perfiles;
        
    }
    
    function create(){
        $sql = "INSERT INTO perfil(nombre,permiso_gestionar_usuarios,permiso_vender, permiso_gestionar_perfiles) VALUES ('".$this->nombre."','".$this->permiso_gestionar_usuarios."','".$this->permiso_vender."','".$this->permiso_gestionar_perfiles."')";
        $response = getResultSQL($sql);
        if (!$response) {
            return false;
        } else {
            return true;
        }
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function setNombre() {
        return $this->nombre;
    }
    function getPermiso_gestionar_usuarios() {
        return $this->permiso_gestionar_usuarios;
    }

    function setPermiso_gestionar_usuarios() {
        return $this->permiso_gestionar_usuarios;
    }
    
    function getPermiso_vender() {
        return $this->permiso_vender;
    }

    function setPermiso_vender() {
        return $this->permiso_vender;
    }
    
    function getPermiso_gestionar_perfiles() {
        return $this->permiso_gestionar_perfiles;
    }

    function setPermiso_gestionar_perfiles() {
        return $this->permiso_gestionar_perfiles;
    }

    

 
    


}