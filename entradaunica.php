<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/entradaunica.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HitoGrupal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><b>Inicio</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="entrada.php">Entradas publicadas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


    
<?php
require_once('conexion.php');



$id=$_GET['GetID'];


$resultado=$conexion1->query("SELECT*FROM entradas where id='$id'");


while ($fila = $resultado->fetch_assoc()) {
    $id=$fila['id'];
    $titulo=$fila['titulo'];
    $contenidotexto=$fila['contenidotexto'];
    $imagen=$fila['imagen'];
    $fechapublicacion=$fila['fechapublicacion'];
}
?>
<div class="contenedor">
    
<h1><?php echo $titulo?></h1>
<p>
<img width="100px" height="75px" src='<?php echo $imagen?>'>
</p>

<p><?php echo $contenidotexto?></p>

<footer><?php echo $fechapublicacion?></footer>

<a href="editar.php?GetID=<?php echo $id?>"><input type="button" value="Editar"></a>

<a href="eliminar.php?GetID=<?php echo $id?>"><input type="button" value="Eliminar"></a>
</div>
</body>
</html>