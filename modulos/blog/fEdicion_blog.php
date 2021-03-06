<?php
session_start();

if(!isset($_SESSION["id"]) && !isset($_SESSION["nombre"]) && !isset($_SESSION["status"])){
  header("Location: ../../index.php");
}
?>

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
<?php require_once '../../conexion.php'; 
  $id = $_GET["id"];
  $consulta = "SELECT * FROM blog as bg INNER JOIN categorias as ct ON ct.id = bg.id_cat_fk where bg.id = $id";
  $resultado = mysqli_query($mysqli, $consulta);
  while($fila = mysqli_fetch_array($resultado)){
?>


 <!--Estetica-->
<div class="container mt-5">
<div class = "row">
  <div class ="col-sm-12">
  <form action="editar_blog.php" method="post">

  <div class="form-group">
      <label for="nombre">Titulo</label>
      <input type="text" name="titulo" id="nombre" value="<?php echo $fila["titulo"]; ?>">    
  </div>

    <div class="form-group">
      <label for="nombre">Descripcion</label>
      <input type="text" name="descripcion" id="nombre" value="<?php echo $fila["descripcion"]; ?>">    
  </div>

    <div class="form-group">
      <label for="nombre">Fecha</label>
      <input type="date" name="fecha" id="nombre" value="<?php echo $fila["fecha"]; ?>">    
  </div>

    <div class="form-group">
      <label for="nombre">Autor</label>
      <input type="text" name="autor" id="nombre" value="<?php echo $fila["autor"]; ?>">    
  </div>

  <div class="form-group">
      <label for="nombre">Categoria</label>
      <select name="categoria" id="categoria">
      <?php
      $consulta_categoria = "SELECT * FROM categorias";
      $resultado_categoria = mysqli_query($mysqli, $consulta_categoria);
      while($fila_cat = mysqli_fetch_array($resultado_categoria)){
      ?>
        <option value="<?php echo $fila_cat["id"]; ?>" <?php if($fila_cat["id"] == $fila["id"]) echo 'selected' ?>><?php echo $fila_cat["nombre_titulo"]; ?></option>

        <?php 
        }
        ?>
      </select>
      </div>

  <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
<div class="form-group">
  <input type="submit"  name="btnEnviar" value ="Registra tu dato" class="btn btn-success">  
</div>
</form>

</div>
</div>
</div>
<?php } ?>


  <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>