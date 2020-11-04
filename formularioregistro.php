<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="estilos.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
          <a class="nav-link" href="formularioregistro.php">inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="compra.php">compras<span class="sr-only">(current)</span></a>
        </li>
      </ul>
      
      
    </div>
  </nav>
</header>
<main class="fondomain">
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

<div class="container fondo ">
<h1 class=" justify-content-center mt-5" >FORMULARIO DE REGISTRO PRODUCTOS</h1>

<form class="fondo" action="registrarproductos.php" method="POST">

  <div class="form-group mt-5 row justify-content-center">

  <label for="codigo" class="col-sm-2 col-form-label justify-content-center mt-4">codigo del producto</label>
    <div class="col-sm-6">
      <input type="number" class="form-control mt-4"  placeholder="codigo" name="codigo">
    </div>
  </div>
  <div class="form-group row justify-content-center">
    <label for="text" class="col-sm-2 col-form-label mt-4 justify-content-center">nombre del producto</label>
    <div class="col-sm-6">
      <input type="name" class="form-control mt-4" placeholder="nombre" name="nombre">
    </div>
  </div>
  <div class="form-group row justify-content-center">
    <label for="precio" class="col-sm-2 col-form-label justify-content-center">precio del producto</label>
    <div class="col-sm-6">
      <input type="number" class="form-control" placeholder="precio" name="precio">
    </div>
  </div>

  <div class="form-group row justify-content-center">
    <label for="descripcion" class="col-sm-2 col-form-label ">descripcion del producto</label>
    <div class="col-sm-6">
        <textarea class="form-control" name="descripcion" placeholder="breve descripcion" rows="3"></textarea>
      </div>
  </div>

     
    <div class="row justify-content-center">
      <legend class="col-form-label col-sm-2 pt-0 ">marca</legend>
      <div class="col-sm-6">
        <div class="form-check ">
          <input class="form-check-input " type="radio" name="marca"  value="deli.SAS" checked >
          <label class="form-check-label " for="gridRadios1">
            deli.SAS
          </label>
        </div>
        <div class="form-check justify-content-center">
          <input class="form-check-input " type="radio" name="marca"  value="maria luisa">
          <label class="form-check-label " for="gridRadios2">
            maria luisa
          </label>
        </div>
        <div class="form-check justify-content-center">
          <input class="form-check-input " type="radio" name="marca"  value="tortas exito">
          <label class="form-check-label " for="gridRadios2">
            tortas exito
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="marca"  value="postres, dulces, tortas de la casa (dulce tenatacion)">
          <label class="form-check-label" for="gridRadios2">
            postres, dulces, tortas de la casa (dulce tenatacion)
          </label>
          </div>

          

  <div class="form-group row justify-content-center">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary  btn-block mt-5" name="boton">registrar</button>
    </div>
  </div>

</div>
</form>

</div>



</div>
</main>
<footer>

</footer>    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>