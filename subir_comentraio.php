<?php
              include_once 'conexion.php';
              $objeto = new Conexion();
              $conexion = $objeto->Conectar();
            if (isset($_POST['Comentar'])){
                $query = mysql_query ("INSERT INTO pqrs (coment_queja) value ('".$_POST['comentar']."')");
                if($query) { header ("Location: index.php"); }
            }
            print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;

    ?>