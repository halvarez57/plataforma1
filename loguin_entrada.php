
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=hort, initial-scale=1.0">
    <link rel="stylesheet" href="stylo/css/stylo6/stylo6.css">
    <title>hoas de entrada</title>
</head>
<body>
<div class="wrap">
		<div class="widget">
			<div class="fecha">
				<p id="diaSemana" class="diaSemana"></p>
				<p id="dia" class="dia"></p>
				<p>de </p>
				<p id="mes" class="mes"></p>
				<p>del </p>
				<p id="year" class="year"></p>
			</div>
	
			<div class="reloj">
				<p id="horas" class="horas"></p>
				<p id="ampm" class="ampm"></p>
         </div>
         </div>
    </div>
    </div>
    

<h1>Ingresar</h1>

<form action="validar.php" method="post">
<input type="text" name="usuario" placeholder="ingresar usuario">
<input type="password" name="password" placeholder="ingresar contraseña">
<input type="submit" value="Entrar">
</form>
</body>
</html>
<script type="text/javascript" src="reloj.js"></script>
<?php 
	$hoy = date("Y-m-d H:i:s"); 
?>