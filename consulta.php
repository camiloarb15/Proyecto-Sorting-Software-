<?php
include_once 'conexion.php';
$conexion = $objeto->Conectar();
$consulta = "SELECT * FROM producto";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;
?> 