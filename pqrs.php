<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>  
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <head>
    
      
    </head>
        <body>
            <div id="imagenes">
                <p>Imagenes</p>
                <br>

            </div>

            <div id="general">


                <div id="menu">
                    <span></spanp>
                    <?php include ("menu.php"); ?>

                </div>


                <div id="inicio">
                <form name="form1" method="post" action="">
  <label for="textarea"></label>
  <center>
    <p>
      <textarea name="comentario" cols="80" rows="5" id="textarea"></textarea>
    </p>
    <p>
      <input type="submit" name="reply" value="Comentar">
    </p>
    </center>
    </form>
    

    <?php
               include_once 'conexion.php'; 
            if (isset($_POST['Comentar'])){
                $query = mysql_query ("INSERT INTO pqrs (coment_queja) value ('".$_POST['comentario']."')");
                if($query) { header ("Location: index.php"); }
            }

    ?>
  

                
                </div>


                <div id="cerrarsesion">
                    <span></spanp>
                    <?php include ("cerrar_sesion.php"); ?>

                </div>

                <div id="publicidad">
                    <p>Publicidad</p>

                </div>

                


            </div>
        </body>
    
</html>