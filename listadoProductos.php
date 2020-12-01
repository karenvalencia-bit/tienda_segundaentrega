<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTADO</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg  navbar-light bg-light fixed-top">

<a class="navbar-brand" href="listado.php">
<img src="https://www.flaticon.es/svg/static/icons/svg/1205/1205018.svg" width="30" height="30" alt="imgicono" loading="lazy">
DULCE TENTACION

  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="formularioregistro.php">formulario<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
                      <a class="nav-link" href="listadoProductos.php">consultar datos<span class="sr-only">(current)</span></a>
                    </li>
      </ul>
      
      
    </div>
  </nav>
</header>


<main>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.marovalles.com/imagenes/secciones/3c_Portada-pasteles.jpg" class="d-block w-100" alt="carusel1">
    </div>
    <div class="carousel-item">
      <img src="https://royaltipstea.com/img/cms/infusiones-detox-purificantes-con-ingredientes-naturales-3.jpg" class="d-block w-100" alt="carusel2">
    </div>
    <div class="carousel-item">
      <img src="https://3castillos.com/wp-content/uploads/2019/02/Banner-linea-especialidades.jpg" class="d-block w-100" alt="carusel3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
  <h1>PRODUCTOS</h1>
<div class="row row-cols-1 row-cols-md-3">
<?phpinclude("BaseDatos.php");?>

<?php 
//consultar datos
 include("BaseDatos.php");

 $operacion= new BaseDatos();
 $consultaSQL="SELECT * FROM productos WHERE 1";

 //almacenar la respuesta de la consulta

 $productos=$operacion->consultarDatos($consultaSQL);

?>

    <?php foreach ($productos as $producto):?>

    <div class="col mb-4 mt-5" >
      <div class="card h-100">
        <img src="<?php echo($producto["foto"])?>" class="card-img-top" alt="foto">
          <div class="card-body">
               <h5 class="card-title"><?php echo("CODIGO: ".$producto["codigo"])?></h5>
               <h5 class="card-title"><?php echo("NOMBRE: ".$producto["nombre"])?></h5>
               <h5 class="card-title"><?php echo("MARCA: ".$producto["marca"])?></h5>
               <h5 class="card-title"><?php echo("PRECIO: ".$producto["precio"])?></h5>
              <h5> <p class="card-text"><?php echo("BREVE DESCRIPCION: ".$producto["descripcion"])?></p></h5>
               <a href="eliminarProducto.php?id=<?php echo ($producto["id"])?>" class="btn btn-danger">ELIMINAR</a>

              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editar<?php echo ($producto["id"])?>">
                        EDITAR
              </button>
      
            </div>

       </div>

       <div class="modal fade" id="editar<?php echo ($producto["id"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edite aqui</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="editarProducto.php?id=<?php echo ($producto["id"])?>" method="POST">
                            
                                  <div class="form-group">
                                        <label>Precio:</label>
                                        <input type="number" class="form-control" name="editarprecio" value="<?php echo($producto["precio"])?>">  
                                   </div>

                                       <div class="form-group">
                                            <label>Descripcion:</label>
                                            <textarea class="form-control"name="editardescripcion" rows="3" > <?php echo($producto["descripcion"])?></textarea>  
                                        </div>

                                        <button type="submit" class="btn btn-primary" name="botoneditar" >Enviar</button>
                            
                            </form>
                          </div>
                         
                        </div>
                      </div>
                  
</div>



  </div>


    <?php endforeach ?>
</div>
</main>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>