<?php

if (isset($_POST['buttonCreate'])) {
    //llamar a crear
} else if (isset($_POST['buttonRead'])) {
    
} else if (isset($_POST['buttonUpdate'])) {
    
} else if (isset($_POST['buttonDelete'])) {
    
} else {   //en caso de ejecutarse alguna de las opciones anteriores, se regresa al menu principal
    header("Location: ../meunu/");
}

class FacturasController {

    //funcion que realiza las acciones de inserccion de registros a la tabla de facturas
    function create() {
        
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
