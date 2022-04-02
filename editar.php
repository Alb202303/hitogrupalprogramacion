<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/editar.css">
</head>
<body>

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
<div class="formulario">
<form method="post" action="update.php?GetID=<?php echo $id?>">
        <label>Título</label><br>
        <input id="texto" type="text" name="titulo" value="<?php echo $titulo?>"><br>
        <label>Contenido texto</label><br>
        <input id="texto" type="text" name="contenidotexto" value=<?php echo $contenidotexto?>><br>
        <label>Imagen</label><br>
        <input id="texto" type="text" name="imagen" value=<?php echo $imagen?>><br>
        <label>Fecha</label><br>
        <input type="date" name="fechapublicacion" value=<?php echo $fechapublicacion?>><br>
        <br>
        <input type="submit" value="Editar entrada">
    </form>
    </div>
</body>
</html>