<?php

class usuarios{
    var $id;
    var $nombre;
    var $apellidos;
    var $email;
    var $nombre_usuario;
    var $password;
    var $tipo_perfil;
    var $estado;
    
    function __construct($nombre, $apellidos, $email, $nombre_usuario, $password, $tipo_perfil, $estado) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->nombre_usuario = $nombre_usuario;
        $this->password = $password;
        $this->tipo_perfil = $tipo_perfil;
        $this->estado = $estado;
    }
    
    function create(){
        $sql = "INSERT INTO usuario(nombre,apellidos,email,nombre_usuario,password,tipo_perfil,estado) VALUES ('".$this->nombre."','".$this->apellidos."','".$this->email."','".$this->nombre_usuario."','".$this->password."','".$this->tipo_perfil."','".$this->estado."')";
        $response = getResultSQL($sql);
        if (!$response) {
            return false;
        } else {
            return true;
        }
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getEmail() {
        return $this->email;
    }

    function getNombre_usuario() {
        return $this->nombre_usuario;
    }

    function getPassword() {
        return $this->password;
    }
    
    function getTipo_perfil() {
        return $this->tipo_perfil;
    }

    function getEstado() {
        return $this->estado;
    }


    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->username = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setemail($email) {
        $this->email = $email;
    }

    function setNombre_usuario($nombre_usuario) {
        $this->nombre_usuario = $nombre_usuario;
    }

    function setPassword($password) {
        $this->password = $password;
    }
    
    function setTipo_perfil($tipo_perfil) {
        $this->tipo_perfil = $tipo_perfil;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

}


?>
