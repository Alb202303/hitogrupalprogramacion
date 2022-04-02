<?php
$titulo=$_POST['titulo'];
$contenidotexto=$_POST['contenidotexto'];
$imagen=$_POST['imagen'];
$fechapublicacion=$_POST['fechapublicacion'];

require_once('conexion.php');
$conexion1->query("INSERT INTO `entradas` (`titulo`, `contenidotexto`, `imagen`, `fechapublicacion`) VALUES ('$titulo', '$contenidotexto', '$imagen', '$fechapublicacion');");

echo("<p>registro guardado</p>");

header("location:index.php");