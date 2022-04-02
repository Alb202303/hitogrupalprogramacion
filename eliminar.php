<?php
require_once('conexion.php');
$id=$_GET['GetID'];
//consulta preparada, paramétrica
//UPDATE `examen_mysqli` SET `unidades` = '20' WHERE `examen_mysqli`.`id` = 1;

/* $eliminar=$conexion1->prepare("DELETE FROM ENTRADAS WHERE ID = ?;");
$eliminar->bind_param("id", $id, PDO::PARAM_INT);
$eliminar->execute(); */

$eliminar=$conexion1->prepare("DELETE FROM ENTRADAS WHERE ID = ?;");
$eliminar->bind_param("i",$id);
$eliminar->execute();

header('location:entrada.php');    

//echo("<p>Se han actualizado ".$filas_actualizadas." registros</p>");

