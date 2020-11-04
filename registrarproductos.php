<?php

include("BaseDatos.php");

if(isset($_POST["boton"])){

    $codigo=$_POST["codigo"];
    $nombre=$_POST["nombre"];
    $precio=$_POST["precio"];
    $descripcion=$_POST["descripcion"];
    $marca=$_POST["marca"];

   // echo($codigo."-"."$nombre"."-".$precio."-".$descripcion."-".$marca);


    $operacionBD= new BaseDatos();
    $operacionBD->conectarBD();


   
    $consultaSQL="INSERT INTO productos(codigo,nombre, marca, descripcion, precio) VALUES ('$codigo','$nombre','$marca','$descripcion','$precio')";
 
    $operacionBD->registroexitoso($consultaSQL);

    
    
}




?>