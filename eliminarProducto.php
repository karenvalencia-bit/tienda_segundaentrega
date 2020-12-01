<?php

include("BaseDatos.php");

$id=$_GET["id"];

$operacion=new BaseDatos();

$consultaSQL="DELETE FROM productos WHERE id='$id'";

$operacion->eliminarDatos($consultaSQL);

header("location:listadoProductos.php");
?>
