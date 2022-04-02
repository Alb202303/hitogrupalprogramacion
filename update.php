<?php
require_once('conexion.php');



$id=$_GET['GetID'];
$titulo=$_POST['titulo'];
$contenidotexto=$_POST['contenidotexto'];
$imagen=$_POST['imagen'];
$fechapublicacion=$_POST['fechapublicacion'];

$resultado=$conexion1->query("UPDATE entradas SET titulo='$titulo', contenidotexto='$contenidotexto', imagen='$imagen', fechapublicacion='$fechapublicacion' where id='$id'");

header('location: entrada.php');