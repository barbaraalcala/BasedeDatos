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
  <div class="col-sm-12">
    <a href='formulario_blog.php' class ="btn btn-primary float-right mb-2">NUEVO</a>  
  </div>
<div class ="col-sm-12">

  <div class="table-reponsive">
    <div class="col-sm-12">
    <table class="table table-stripped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Fecha</th>
        <th>Autor</th>
        <th>Status</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $consulta = "SELECT * FROM blog";
      $resultado = mysqli_query($mysqli, $consulta);
      while($fila = mysqli_fetch_array($resultado)){
      ?>
      <tr>
        <td><?php echo $fila["id"]; ?></td>
        <td><?php echo $fila["titulo"]; ?></td>
        <td><?php echo $fila["descripcion"]; ?></td>
        <td><?php echo $fila["fecha"]; ?></td>
        <td><?php echo $fila["autor"]; ?></td>
        <td><?php echo $fila["status"]; ?></td>
        <td><a href="detalle_blog.php?id=<?php echo $fila['id']; ?>">Editar</a>
           <a href="eliminar_blog.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
      </td>
      </tr>
      <?php }  ?>
    </tbody>
    </table>
  </div>
  </div>
</div>
</div>
</div>

  <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>