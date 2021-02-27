<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive product landing page.">
    <title>Usuario &ndash; Busqueda</title>
    <link rel="shortcut icon" href="img/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/usuario.css">
    <link rel="stylesheet" href="css/main2.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
<div class="header">
        <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
            <a class="pure-menu-heading" href="usuario.php">Inicio</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Tour</a></li>
                <li class="pure-menu-item"><a href="salir.php" class="pure-menu-link">Salir</a></li>
            </ul>
        </div>
    </div>
<div class="content">
            <h2 class="content-head is-center">Resultado de su busqueda</h2>
            <table class="tabla">
                <thead class="tcabez">
                    <th class="th">CODIGO LIBRO</th>
                    <th>TITULO</th>
                    <th>AUTOR</th>
                    <th>CATEGORIA</th>
                </thead>

    <?php
    include("conexion.php");
    if (isset($_POST['btn_buscar'])) {    
      $busqueda = $_POST['cod'];

      $resultado = mysqli_query($db, "SELECT *
         FROM libro 
         INNER JOIN autor
         INNER JOIN categoria
         WHERE (libro.titulo_libro = '$busqueda'  
          or libro.cod_libro='$busqueda'
          or autor.autor='$busqueda' 
          or categoria.categoria='$busqueda')
         and autor.id_autor=libro.autor_id and categoria.id_categoria=libro.categoria_id");
      while ($consulta = mysqli_fetch_array($resultado)) {

        echo "<tr>";
        echo "<td>";
        echo $consulta['cod_libro'];
        echo "</td>";
        "<br>";
        echo "<td>";
        echo $consulta['titulo_libro'];
        echo "</td>";
        echo "<td>";
        echo $consulta['autor'];
        echo "</td>";
        echo "<td>";
        echo $consulta['categoria'];
        echo "</td>";
        echo "</tr>";
      }
    }

    ?>
    </table>
    </div>
</body>
<footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Phone</h4>
                <p>8296312</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p> acevedogomez@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Direccion</h4>
                <p>CL 30 A # A Calle 78 Sur 459</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Sorting | Software</h2><br><br>
</footer>
<div class="final">-----</div>
</html>
