<?php
      
include("conexion.php");
if (isset($_POST['btn_actualizar']))
{
    $id_libro = $_POST['id_libro'];
    $titulo_libro = $_POST['titulo_libro'];
if($id_libro=="" || $titulo_libro=="")
{
    echo "Los campos son obligatorios";
}else{
    $existe=0;
    $resultados = mysqli_query($db, "SELECT * FROM $libro WHERE id_libro = '$id_libro'");
    while($consulta = mysqli_fetch_array($resultados))
    {
        $existe++;
    }
    if($existe==0)
    {
        echo "El codigo libro no existe";
        echo"<a href='formulario_modificar.php''><button type='button' class='btn btn-danger'>Volver</button></a>";
    }
    else{

    $_UPDATE_SQL="UPDATE $libro set
    id_libro='$id_libro',
    titulo_libro='$titulo_libro'

    WHERE id_libro='$id_libro'";
    mysqli_query($db,$_UPDATE_SQL);
    header("location:admin.php");   
 }
}
}
?>





