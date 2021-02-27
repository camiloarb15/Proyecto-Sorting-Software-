<?php
      
include("conexion.php");
if (isset($_POST['btn_eliminar']))
{
    $id_libro = $_POST['id_libro'];  
    $existe=0;
if($id_libro=="")
{
    echo "Los campos son obligatorios";
}else{
  
    $resultados = mysqli_query($db, "SELECT * FROM $libro WHERE id_libro = '$id_libro'");
    while($consulta = mysqli_fetch_array($resultados))
    {
        $existe++;
    }
    if($existe==0)
    {
        echo "El codigo libro no existe";
        echo"<a href='formulario_eliminar.php''><button type='button' class='btn btn-danger'>Volver</button></a>";
    }
    else{
    
    $_DELETE_SQL = "DELETE FROM $libro WHERE id_libro = '$id_libro'";
    mysqli_query($db, $_DELETE_SQL);
    header("location:admin.php");   
 }
}
}
?>
