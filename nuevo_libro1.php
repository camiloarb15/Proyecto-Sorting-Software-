                  <!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
<div id="contenido">
      <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1></h1> </span>
  		<br>
	  <form action="nuevo_libro.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
  		
    <label>Codigo Libro</label>
          <input type="text" id="cod_libro" name="cod_libro" ><br>
          
          
          <label>Titulo</label>
          <input type="text" id="titulo_libro" name="titulo_libro" ><br>
          
          
          <label>autor</label>
          <input type="text" id="autor_id" name="autor_id" ><br>
          
          <label>categoria</label>
          <input type="text" id="categoria_id" name="categoria_id" ><br>
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>
</body>
</html>