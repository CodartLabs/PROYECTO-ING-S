<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/encuesta.css?v10">
    <title>Encuesta</title>
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
	include "controladores/validar_encuestador.php";
	if($editable){
		echo "<center><p class='message_encuesta'>Hola <b>";
		echo $_SESSION['nombres'] ;
		echo "</b>, porque nos importas, y te queremos, venimos a ofrecerte la mejor experiencia posible y,
		con ese propósito, nos gustaría saber qué opinas de nuestro Sistema Web, para lo cual nos gustaría pedirte
	  	5 minutos de tu tiempo para que contestes esta encuesta, valorando las respuesta según la <b>Escala de Likert</b>. 
		</p></center>";
	}else{
		echo '<center><p class="message_encuesta"><span id="check">✓</span> Tu encuesta fue
		registrada con <b>éxito</b>, muchas gracias por tu consideración</b>.
	   </p></center>';
	}

	 ?>
	<div class="question_padre">

		<div class="leyenda">
			<table>
				<tr>
					<td colspan="2" class="t-cab"><h4>Escala de Likert</h4></td>
				</tr>
				<tr id="tacuerdo">
					<td style="color: rgba(100,255,0,1); font-weight: 600; font-size: 1.2rem;">5</td>
					<td>Total Acuerdo</td>
				</tr>
				<tr id="acuerdo">
					<td style="color: rgba(175,255,0,1); font-weight: 600; font-size: 1.2rem;">4</td>
					<td>Acuerdo</td>
				</tr>
				<tr id="neutro">
					<td style="color: #E1D700; font-weight: 600; font-size: 1.2rem;">3</td>
					<td>Neutral</td>
				</tr>
				<tr id="desacuerdo">
					<td style="color: rgba(252,120,0,1); font-weight: 600; font-size: 1.2rem;">2</td>
					<td>Desacuerdo</td>
				</tr>
				<tr id="tdesacuerdo">
					<td style="color: red; font-weight: 600; font-size: 1.2rem;">1</td>
					<td>Total Desacuerdo</td>
				</tr>
			</table>
		
		</div>

		<form method="post" action="calcular_puntuacion.php">
		
			
		<div class="question">
			<div class="titleQ"><h1>Cuestionario&nbsp;</h1><h1 id="titleQ">PhotoStock</h1></div>
			<div class="row">
				<p class="text-q">1. Creo que utilizaría este sistema con frecuencia. </p>
				<input type="number" class="input-q" min="1" max="5" name="q1" required <?php if(!$editable) echo "disabled " ?> <?php if(!$editable) echo "value = '$data1'" ?>>
			</div>

			<div class="row">
				<p class="text-q">2. Creo que el sistema es innecesariamente complejo. </p>
				<input type="number" class="input-q" min="1" max="5" name="q2" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data2'" ?>>
			</div>

			<div class="row">
				<p class="text-q">3. Creo que el sistema es fácil de usar. </p>
				<input type="number" class="input-q" min="1" max="5" name="q3" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data3'" ?>>
			</div>

			<div class="row">
				<p class="text-q">4. Creo que necesitaría soporte técnico para poder utilizar este sistema. </p>
				<input type="number" class="input-q" min="1" max="5" name="q4" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data4'" ?>>
			</div>

			<div class="row">
				<p class="text-q">5. Creo que las diferentes funciones de este sistema estaban bien integradas. </p>
				<input type="number" class="input-q" min="1" max="5" name="q5" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data5'" ?>>
			</div>

			<div class="row">
				<p class="text-q">6. Creo que hay demasiada inconsistencia en este sistema. </p>
				<input type="number" class="input-q" min="1" max="5" name="q6" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data6'" ?>>
			</div>

			<div class="row">
				<p class="text-q">7. Creo que la mayoría de gente aprendería a utilizar este sistema rápidamente. </p>
				<input type="number" class="input-q" min="1" max="5" name="q7" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data7'" ?>>
			</div>

			<div class="row">
				<p class="text-q">8. Creo que el sistema es complicado de usar. </p>
				<input type="number" class="input-q" min="1" max="5" name="q8" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data8'" ?>>
			</div>

			<div class="row">
				<p class="text-q">9. Me he sentido seguro usando el sistema. </p>
				<input type="number" class="input-q" min="1" max="5" name="q9" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data9'" ?>>
			</div>

			<div class="row-ult">
				<p class="text-q">10. He necesitado aprender muchas cosas antes de poder utilizar correctamente el sistema. </p>
				<input type="number" class="input-q" min="1" max="5" name="q10" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data10'" ?>>
			</div>

		</div>
		
		<input style="visibility:hidden;" value="<?php echo $_SESSION['id_usuario'] ?>" name="valorid"></input>
		
		<br><center>
		<input class="button" type="submit" name ="crear" <?php if(!$editable) echo 'style="visibility: hidden;"' ?> <?php if(!$editable) echo ' style="background: #212529 !important;"' ?>>
		</center>
		</form>

		<?php
		if(!$editable){
		 include "resultado_grafico.php"; 
		}
		 ?>

	</div>
	
</body>


</html>