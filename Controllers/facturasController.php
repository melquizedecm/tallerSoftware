<?php

require_once '../lib/links.php';
libnivel2();

if (isset($_POST['buttonCreate'])) {
    $FacturasController = new FacturasController();
    $FacturasController->create();
    
} else if (isset($_POST['buttonRead'])) {
    
} else if (isset($_POST['buttonUpdate'])) {
    
} else if (isset($_POST['buttonDelete'])) {
    
} else {   //en caso de ejecutarse alguna de las opciones anteriores, se regresa al menu principal
    header("Location: ../meunu/");
}

class FacturasController {

    //funcion que realiza las acciones de inserccion de registros a la tabla de facturas
    function create() {
        //1. Recibir variables 
        $idCliente->$_POST['inputIdCliente'];
        $idComision->$_POST['inputIdComision'];
        $fecha->_POST['inputFecha'];
        $estado->_POST['inputEstado'];
        $total->_POST['inputTotal'];
        
        //2.Llamar al modelo
        
        require_once '../Models/Facturas.php';
        $factura = new Factura(0,$idCliente,$idComision,$fecha,$estado,$total);
        $factura->create();
    }

    //funcion de consulta a la tabla de facturas
    function read() {
        
    }

    //funcion que actualiza un determinado registro
    function update() {
        
    }

    //funcion que elimina registros de la tabla 
    function delete() {
        
    }

}

?>
