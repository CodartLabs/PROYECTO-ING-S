<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
	<link rel="stylesheet" href="assets/css/index.css?v1">
	<title>PhotoStock</title>
</head>
<body>
  <?php include "templates/header.php";?>


	<div class="custom-main">

    <center>
  <div id="alerta_encuesta">
  <p>¿Deseas contestar una breve encuesta para ayudarnos a mejorar nuestros servicios? 
    ¡Sólo te tomará 5 minutos!</p>
  <a href="encuesta.php" class="ir_encuesta">Responder encuesta</a>
  </div>
  <p class="pequenio">Si ya lo hiciste, ignora este mensaje.</p>
    </center>

  <div class="grid-container fotos-recomendadas">
      <h2>Productos que te pueden gustar</h2>
      <section class="grid" id="grid">
        <div class="item">
          <div class="item-contenido">
          <?php include "controladores/obtener_fotos_recomendadas.php";?>
          </div>
          </div>
        </div>
      </section>
    </div>

    <div class="grid-container fotos-recomendadas">
      <h2>Subidas recientemente</h2>
      <section class="grid" id="grid">
        <div class="item">
          <div class="item-contenido">
          <?php include "controladores/obtener_fotos_recientes.php";?>
          </div>
          </div>
        </div>
      </section>
    </div>


    <div class="grid-container fotos-populares">
      <h2>Productos mejor valorados<h2>
      <section class="grid" id="grid">
        <div class="item">
          <div class="item-contenido">
          <?php include "controladores/obtener_fotos.php";?>
          </div>
          </div>
        </div>
      </section>
    </div>
  </div>

</body>
</html>