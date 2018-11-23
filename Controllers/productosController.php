<?php
require_once '../lib/consultas.php';
libnivel2();


if(isset($_POST['buttonCreate'])){
    require_once '../lib/links.php';
    libnivel2();
    $controller = new ProductosController();
    $controller->create();
}
elseif(isset ($_POST['buttonRead'])){
    
}
elseif(isset ($_POST['buttonUpdate'])){
    
}
elseif (isset ($_POST['buttonDelete'])) {

}else{
    header("location:../menu/");
}

class ProductosController{
    function create(){
     //1. Recibir variables 
        $idCliente->$_POST['inputnombre'];
        $idComision->$_POST['inputIdComision'];
        $fecha->_POST[''];
        $estado->_POST[];
        //2.Llamar al modelo
        
        require_once '../Models/Productos.php';
        $factura = new Factura($inputNombre);
        $factura->create();
       
    }
    function read(){
        
    }
    function update(){
        
    }
    function delete(){
        
    }
}


?>
