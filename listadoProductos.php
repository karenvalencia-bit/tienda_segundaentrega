<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTADO</title>
</head>
<body>

<?php 
//consultar datos
 include("BaseDatos.php");

 $operacion= new BaseDatos();
 $consultaSQL="SELECT * FROM productos WHERE 1";

 //almacenar la respuesta de la consulta

 $productos=$operacion->consultarDatos($consultaSQL);

 //mostrar los datos
 print_r($productos);


?>
<div class="container">
<div class="row row-cols-1 row-cols-md-3">

    <?php foreach ($productos as $producto):?>

    <div class="col mb-4">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo("CODIGO: ".$producto["codigo"])?></h5>
        <h5 class="card-title"><?php echo("NOMBRE: ".$producto["nombre"])?></h5>
        <h5 class="card-title"><?php echo("MARCA: ".$producto["marca"])?></h5>
        <h5 class="card-title"><?php echo("PRECIO: ".$producto["precio"])?></h5>
       <h5> <p class="card-text"><?php echo("BREVE DESCRIPCION: ".$producto["descripcion"])?></p></h5>
        <a href="eliminarProducto.php?id=<?php echo ($producto["id"])?>" class="btn btn-danger">ELIMINAR</a>
      
      </div>
    </div>
  </div>


    <?php endforeach ?>
</div>
    


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>