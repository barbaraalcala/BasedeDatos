<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BLOG</title>
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<?php
//TABLA BLOG
 require_once 'conexion.php'; ?>

 <!--Estetica-->
<div class="container mt-5">
<div class = "row">
  <div class ="col-sm-12">
  <form action="insertar_blog.php" method="post">

  <div class="form-group">
      <label for="nombre">Titulo</label>
      <input type="text" name="titulo" id="nombre" placeholder="Ingresa el titulo">    
  </div>

    <div class="form-group">
      <label for="nombre">Descripcion</label>
      <input type="text" name="descripcion" id="nombre" placeholder="Ingresa la descripcion">    
  </div>

    <div class="form-group">
      <label for="nombre">Fecha</label>
      <input type="date" name="fecha" id="nombre" placeholder="Ingresa la fecha">    
  </div>

    <div class="form-group">
      <label for="nombre">Autor</label>
      <input type="text" name="autor" id="nombre" placeholder="Ingresa el autor">    
  </div>

<div class="form-group">
  <input type="submit"  name="btnEnviar" value ="Registra tu dato" class="btn btn-success">  
</div>
</form>

</div>
</div>
</div>


  <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>