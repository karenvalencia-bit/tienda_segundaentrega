<?php  

include("BaseDatos.php");

if(isset($_POST["botoneditar"]))
{
    $id=$_GET["id"];

    $precio=$_POST["editarprecio"];
    $descripcion=$_POST["editardescripcion"];

    $operacionBD=new BaseDatos();

    $consultaSQL="UPDATE productos SET descripcion='$descripcion', precio='$precio' WHERE id='$id'";

    $operacionBD->actualizarDatos($consultaSQL);
}

header("location:listadoProductos.php");
?>

