<?php
$cod_libro=$_POST['cod_libro'];
$titulo_libro=$_POST['titulo_libro'];
$autor_id=$_POST['autor_id'];
$categoria_id=$_POST['categoria_id'];


    if ( $cod_libro=="" || $titulo_libro=="" || $autor_id=="" || $categoria_id=="")
    {
        echo"los campos son obligatorios";
        echo"<a href='index.php''><button type='button' class='btn btn-danger'>Eliminar</button></a>";
    }

    else{
include "conexion.php"; 
    }
$statement = $conexion->prepare('INSERT INTO libro, categoria, autor (codigo_libro, titulo libro, , categoria_id)
VALUES (:, :password, :checkbox)');
$statement->execute(array(
':usuario' => $usuario,
':password' => $password,
':checkbox' => $checkbox));

?>

