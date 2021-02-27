<?php
    class Sesion
    {
        public function evaluar($documento, $contrasena)
        {
            session_start();
        include ("conexion.php");
        $contador="0";
        $sql =  "SELECT * FROM usuarios WHERE documento='$documento'";
      if(!$result = $db->query($sql)){
      die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
      }
      while($row = $result->fetch_assoc())
      {    
      $ccontrasena=stripslashes($row["contrasena"]);
       if ($contrasena==$ccontrasena)
       {
       $contador=$contador+1;
       $_SESSION["usuario"]="1";
       $_SESSION["documento"]=$documento;
       //nnnnnnnnnnnnnnnnnnnn
       
       $sql2 =  "SELECT * FROM permisos WHERE documento='$documento'";
       if(!$result2 = $db->query($sql2)){
       die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
       }
       while($row2 = $result2->fetch_assoc())
       {    
       $ffk_id_rol=stripslashes($row2["fk_id_rol"]);
    
       if($ffk_id_rol=="1")
       {
         $_SESSION["admin"]="1";
       }
       if($ffk_id_rol=="3")
       {
         $_SESSION["vendedor"]="1";
       }
    
       }
       //hhhhhhhhhhhhhhhh
       header ("Location: usuario.php");
       }
    
         if ($contrasena!=$ccontrasena)
      {
    
         echo "Datos incorrectos";
    
      }
    
    } //Fin del While
    
    
    if ($contador=="0")
    {
    
        header ("Location: inicio_sesion.php?error=error");
    }
    
    
    
    
        }
    
    }
    $nuevo=new Sesion();
    $nuevo->evaluar($_POST["documento"],$_POST["contrasena"]); 
    
    
    ?>
