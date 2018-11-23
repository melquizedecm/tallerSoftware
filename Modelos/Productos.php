<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



class productos {

    var $id;
    var $username;
    var $categoria_id;
    var $nombre;
    var $cantidad;
    var $valor_unitario;
    var $estado;
    var $usuario_id;
    function __construct($id, $username, $categoria_id, $nombre, $cantidad, $valor_unitario, $estado, $usuario_id) {
        $this->id = $id;
        $this->username = $username;
        $this->categoria_id = $categoria_id;
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
        $this->valor_unitario = $valor_unitario;
        $this->estado = $estado;
        $this->usuario_id = $usuario_id;
    }
    function create(){
        $sql="INSERT INTO producto(id,) values('".$this->id."','".$this->username."','".$this->categoria_id."','".$this->nombre."')";
        $responde=getResultSQL($sql);
        if(!$responde){
            return false; 
        }else
        {
            return true;
        }
    }
     
    function getId() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }

    function getCategoria_id() {
        return $this->categoria_id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getValor_unitario() {
        return $this->valor_unitario;
    }

    function getEstado() {
        return $this->estado;
    }

    function getUsuario_id() {
        return $this->usuario_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setCategoria_id($categoria_id) {
        $this->categoria_id = $categoria_id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setValor_unitario($valor_unitario) {
        $this->valor_unitario = $valor_unitario;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

}





?>
