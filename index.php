<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">	  
	<title>Prueba Hector M.</title>
	  
  </head>

  <body>
	  
	  <div class="container">
		  
		<br> 
    	<h1>Binarios:</h1>
		<br>

	  </div>

	  <div class="container">
	  	<form class="form-inline" method="POST" action="resultado.php">
		  <div class="form-group mb-2">
		    <label for="ingrese" class="sr-only"></label>
		    <input type="text" readonly class="form-control-plaintext" id="ingrese" value="Ingrese el numero:">
		  </div>
		  <div class="form-group mx-sm-3 mb-2">
		    <label for="arreglo" class="sr-only">Arreglo</label>
		    <input type="number" min="0" max="100" class="form-control" id="numero" name="numero" placeholder="Numero" required>
		  </div>
		  <button type="submit" class="btn btn-primary mb-2">Calcular</button>
		</form>
	  </div>

	<script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
  </body>
</html>