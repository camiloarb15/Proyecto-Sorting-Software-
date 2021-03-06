<?php
include("seguridad_general.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive product landing page.">
    <title>Inicio &ndash; Administrador</title>
    <link rel="shortcut icon" href="img/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/admin2.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/central2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,900&display=swap" rel="stylesheet">

</head>

<body>

    <div class="header">
        <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
            <a class="pure-menu-heading" href="">Inicio</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Tour</a></li>
                <li class="pure-menu-item"><a href="salir.php" class="pure-menu-link">Salir</a></li>
            </ul>
        </div>
    </div>

    <div class="splash-container">
        <div class="splash">
            <h1 class="splash-head">ADMINISTRADOR</h1>
            <p class="splash-subhead">
                Agregue-Modifique-Elimine 
            </p>
            <div class="container">
                <form action="resultado.php" role="form" method="POST">
                    <div class="form-group">
                        <label for="libro"></label>
                        <input type="text" class="form-control" name="cod" id="cod">
                    </div>
                    <input type="submit" value="BUSCAR" class="pure-button pure-button-primary" name="btn_buscar">
                    <a href='nuevo_libro1.php'><button type='button' class="pure-button pure-button-primary" name="btn_buscar">NUEVO</button> </a>
                    <a href='form_modi.php'><button type='button' class="pure-button pure-button-primary" name="btn_buscar">EDITAR</button> </a>
                    <a href='form_elim.php'><button type='button' class="pure-button pure-button-primary" name="btn_buscar">ELIMINAR</button> </a>
                </form>
            </div>
        </div>
    </div>




    <div class="content-wrapper">
        <div class="content">
            <h2 class="content-head is-center">Lectura sin fronteras</h2>

            <div class="pure-g">
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                    <h3 class="content-subhead">
                        <i class="fa fa-rocket"></i> Busqueda Rapida
                    </h3>
                    <p>
                        Puede buscar el contenido que desea al momento, ya que el sistema cuenta con un filtro que funciona para cualquier contenido.
                    </p>
                </div>
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                    <h3 class="content-subhead">
                        <i class="fa fa-mobile"></i> Diseño Receptivo
                    </h3>
                    <p>
                        Cuenta con un diseño el cual permite que se adapte a cualquier dispositivo que permita una visualizacion web.
                    </p>
                </div>
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                    <h3 class="content-subhead">
                        <i class="fa fa-th-large"></i> Eficiente 
                    </h3>
                    <p>
                        Cumple sus funciones de manera competente a la hora de realizar la busqueda.
                    </p>
                </div>
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                    <h3 class="content-subhead">
                        <i class="fa fa-check-square-o"></i> Actualizado
                    </h3>
                    <p>
                        Se mantiene un margen concreto en cuanto a cualquier contenido establecido en el inventario, teniendo en cuenta el contenido agregado o eliminado.
                    </p>
                </div>
            </div>
        </div>

        <div class="ribbon l-box-lrg pure-g">
            <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
                <img width="150" alt="File Icons" class="pure-img-responsive" src="img/usuariolibro.svg">
            </div>
            <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

                <h2 class="content-head content-head-ribbon">Gran Contenido</h2>

                <p>
                    Libros de gran calidad, teniendo en cuenta grandes autores de todo el mundo, como sus grandes obras las cuales son una experiencia fabulosa.<br> tanto como la literatura moderna, contamos con un gran espacio para libros de aprendizaje como lo tiene que ver la ciencia y la practicas.
                </p>
            </div>
        </div>
        <div class="content">
            <h2 class="content-head is-center">Ultimo contenido agregado</h2>
            <table class="tabla">
                <thead class="tcabez">
                    <th class="th">CODIGO LIBRO</th>
                    <th>TITULO</th>
                    <th>AUTOR</th>
                    <th>CATEGORIA</th>
                </thead>
                <?php
                include "conexion.php";
                $sentencia = "SELECT cod_libro ,titulo_libro ,autor , categoria FROM libro INNER JOIN autor
                ON libro.autor_id=autor.id_autor
                INNER JOIN categoria ON libro.categoria_id=categoria.id_categoria;";
                $resultado = $db->query($sentencia);
                while ($filas = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>";
                    echo $filas['cod_libro'];
                    echo "</td>";
                    echo "<td>";
                    echo $filas['titulo_libro'];
                    echo "</td>";
                    echo "<td>";
                    echo $filas['autor'];
                    echo "</td>";
                    echo "<td>";
                    echo $filas['categoria'];
                    echo "</td>";
                    echo "</tr>";
                }

                ?>
            </table>
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
        <h2 class="titulo-final">&copy; Sorting | Software</h2>
    </footer>
        </body>

</html>