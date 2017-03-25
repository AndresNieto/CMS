<?php 
    $listaProductos = json_decode($_POST['productos']);
    //echo var_dump($listaProductos);
    // exit();
    include 'bd.php';
    echo $listaProductos[0];
    



 	
		
?>