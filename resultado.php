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

	  <?php
	  	$numero=$_POST['numero'];

		for($i=0;$i<=$numero;$i++)
		{
			$arreglo[$i]=strlen(str_replace('0','',decbin($i)));
		}
		
		  	$num_1=array_search(max($arreglo),$arreglo);
		  	$num_2=$numero-$num_1;
	  ?>
		  
		  <h1>Resultado Prueba.</h1>
		  <br>
		  <h2>Entrada: <?php echo $numero; ?></h2>
		  <br>
		  <h2>Los números que mayor cantidad de dulces pueden obtener son: <?php echo $num_1 .' + '.$num_2; ?></h2>

	  </div>
  </body>
</html>