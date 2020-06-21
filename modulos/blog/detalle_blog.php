<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parcial 1</title>
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <?php require_once '../../conexion.php'; ?>
  <div class="table-reponsive">
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
      //TABLA BLOG
      $id = $_GET['id'];
      $consulta = "SELECT * FROM blog where id = $id";
      $resultado = mysqli_query($mysqli, $consulta);
      $fila = mysqli_fetch_array($resultado);
      ?>
      <tr>
        <td><?php echo $fila["id"];?></td>
        <td><?php echo $fila["titulo"];?></td>
        <td><?php echo $fila["descripcion"];?></td>
        <td><?php echo $fila["fecha"];?></td>
        <td><?php echo $fila["autor"];?></td>
        <td><?php echo $fila["status"];?></td>
        <td>
          <a href="fEdicion_blog.php?id=<?php echo $id ?>">Editar</a>
          <a href="index.php">Regresar a la tabla principal</a>
        </td>
      </tr>
    </tbody>
    </table>
  </div>
  <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>