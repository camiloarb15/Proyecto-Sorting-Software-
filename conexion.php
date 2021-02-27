<?php
//header("Content-Type: text/html;charset=utf-8");
$db = new mysqli('localhost', 'root', '', 'sorting_software');
$libro="libro";
$acentos = $db->query("SET NAMES 'utf8'");
//servidor, ususario, password, DB
if($db->connect_error > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

?>