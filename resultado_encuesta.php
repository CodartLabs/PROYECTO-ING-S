<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/encuesta_r.css?v1">
    <title>Resultado Encuesta</title>
</head>
<body>
	<?php 
	include "controladores/comprobar_sesion.php";
	include "controladores/crear_blog.php";
	if(!estaLogeado()){
	 header ("Location: login.php");
	 die();
	}
	include "templates/header.php";
	include "controladores/calcular_promedio_encuesta.php";

	 ?>
	<div class="question_padre">
	<div>
	<center><h1>RESULTADOS DE LA ENCUESTA</h1></center>
	</div>
	<div>
	<center>
	<?php
	include "resultado_grafico_admin.php"; 
	?>
	<a href="resultado_encuesta.php" class="ir_encuesta">Actualizar</a>
	</center><br><br>
	</div>

	</div>
	
</body>


</html>