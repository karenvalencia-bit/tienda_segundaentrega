<?php

include("BaseDatos.php");

if(isset($_POST["boton"])){

    $codigo=$_POST["codigo"];
    $nombre=$_POST["nombre"];
    $precio=$_POST["precio"];
    $descripcion=$_POST["descripcion"];
    $marca=$_POST["marca"];
    $foto=$_POST["foto"];

   // echo($codigo."-"."$nombre"."-".$precio."-".$descripcion."-".$marca);


    $operacionBD= new BaseDatos();
    //$operacionBD->conectarBD();


   
    $consultaSQL="INSERT INTO productos( codigo, nombre, marca, descripcion, precio, foto) VALUES ('$codigo','$nombre','$marca','$descripcion','$precio','$foto')";
 
    $operacionBD->agregarDatos($consultaSQL);
   

    
    
}
header("location:listadoProductos.php");

?>
