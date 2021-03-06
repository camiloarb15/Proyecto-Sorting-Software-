<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A layout example that shows off a responsive product landing page.">
  <title>Usuario &ndash; Busqueda</title>
  <link rel="shortcut icon" href="img/icon.svg" type="image/x-icon">
  <link rel="stylesheet" href="css/main2.css">
  <link rel="stylesheet" href="css/newli.css">
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
  <h2 class="content-head is-center">Nuevo libro</h2>
  		<br>
	  <form class="pastelito" action="nuevo_libro.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
  		
  
          <input class="entrada" type="text" id="cod_libro" name="cod_libro" placeholder="Codigo del libro" ><br><br>
          
          
        
          <input class="entrada" type="text" id="titulo_libro" name="titulo_libro" placeholder="Titulo"><br><br>
          
          
          
          

          seleccione autor:<br>
          <label>
          <select name="autor_id" class="entrada" required>
          <?php
          echo "<option value=$autor_id>$autor_id</option>"
          ?>
          <option value="1">Gabriel Garcia Marquez</option>
          <option value="2">Paulo Neruda </option>
          <option value="3">Frederick Nietzsche </option>
          <option value="4">Stephen King </option>
          <option value="5">Julio Verne </option>
          <option value="6">Isaac Asimov</option>
          <option value="7">Benito Perez Galdos </option>
          <option value="8">Isabel Allende </option>
          <option value="9">Josep Pla </option>
          <option value="10">Ken Follet </option>
          <option value="11">Pio Baroja</option>
          <option value="12">William Shakespeare</option>
          <option value="13">Jorge Luis Borges </option>
          <option value="14">Albert Camus </option>
          <option value="15">Jose Samarago</option>
          <option value="16">George Orwell</option>
          <option value="17">Karl Marx </option>
          <option value="18">Oscar Wilde  </option>
          <option value="19">Charles Dickens</option>
          <option value="20">Antonio Muñoz Molina </option>
          <option value="11">Carlos Ruiz Zafon</option>
          <option value="22">Enid Blyton </option>
          <option value="23">Roald Dahl</option>
          <option value="24">Aldous Huxley </option>
          <option value="25">Ernest Hemingway </option>

          </select>
          
          </label>
          <br>
          seleccione categoria:
          <label>
          <br>
          <select name="categoria_id" class="entrada" required>
          <?php
          echo "<option value=$categoria_id>$categoria_id</option>"
          ?>  
          <option value="1">Novela</option>
          <option value="2">Poesia</option>
          <option value="3">Historia</option>     
          <option value="4">Aventura</option>
          <option value="5">Fantasia</option>
          <option value="6">Ideologia </option> 
          <option value="7">Drama</option>
          <option value="8">Fabula</option>
          <option value="9">Epico</option> 
          <option value="10">Suspenso</option>
          <option value="11">Terror</option>
          <option value="12">Ciencia</option> 

                    <?php 
            include "conexion.php";
            $autor_id=stripslashes($rowautor["autor_id"]);
            $autor=stripslashes($rowautor["autor_id"]);
            echo "option value=$autor_id>$autor_id</option>";
          ?>  
          </select>
          </label>


        
    <br>
    <br>
  		<button  class="botonl" type="submit" class="btn btn-success">Guardar</button>
     </form>
 
  	
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

</html>
</html>