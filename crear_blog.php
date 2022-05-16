<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/caja.css">
    <title>Crear Blog</title>
</head>
<body>
	<?php 
	include "controladores/comprobar_sesion.php";
	include "controladores/crear_blog.php";
	if(!estaLogeado()){
	 header ("Location: login.php");
	 die();
	}
	include "templates/header.php"
	?>
	<form method="post">
	<div class="custom-main">
    <div id="con-editor">
		<div id="editor">

				<input type="text" id="cajaTitulo" name="titulo" placeholder ="Titulo">

        </div>
    </div>

	<div id="con-editor">
		<div id="editor">
			<textarea id="cajaTexto" name="contenido" placeholder="Escribe el post"></textarea>
		</div>
	</div>
    <br>
    <center>
   <input class="button" type="submit" name ="crear">
    </center>
	</div>
	</form>

	
</body>
</html>