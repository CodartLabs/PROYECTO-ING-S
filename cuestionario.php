<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/encuesta.css?v10">
    <title>Cuestionario</title>
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
	include "controladores/validar_cuestionario.php";
	if($editable){
        echo "";
		echo "<center><p class='message_encuesta'> <b><h3> CUESTIONARIO DE PERCEPCIÓN SOBRE LA EFICACIA Y EFICIENCIA DEL SISTEMA ACADÉMICO SIVIRENO DE LA UNDC </h3> <h6><i>DIRIGIDO A LOS ADMINISTRADORES DEL SISTEMA</i></h6> </b> Hola <b>";
		echo $_SESSION['nombres'] ;
		echo "</b>, el presente cuestionario tiene fines académicos y, como tal la confidencialidad de la información está garantizada, le agradezco a usted responder reflexiva y puntualmente a las siguientes afirmaciones, teniendo en cuenta la escala:
            </b>
		</p></center>
        <div class='papa-escala'>
        <table class='escala'>
            <tr>
                <td class='totalmente'>Totalmente en desacuerdo</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td class='totalmente'>Totalmente de acuerdo</td>
      
             </tr>
       </table>
       </div>"
        ;
	}else{
		echo '<center><p class="message_encuesta"><span id="check">✓</span> Tu encuesta fue
		registrada con <b>éxito</b>, muchas gracias por tu consideración</b>.
	   </p></center>
       ';
	}

	 ?>
	<div class="question_padre">

		<div class="leyenda">
			
		</div>

		<form method="post" action="calcular_eficacia.php">
		
			
		<div class="question">
			<div class="titleQ"><h1>Cuestionario&nbsp;</h1><h1 id="titleQ">Sivireno</h1></div>
            <p class="text-tarea">TAREA 1: Gestionar cursos y horarios</p>
            <p class="text-eficacia">Eficacia</p>
			<div class="row">
				<p class="text-q">1. La tarea está automatizada completamente. </p>
				<input type="number" class="input-q" min="1" max="7" name="q1" required <?php if(!$editable) echo "disabled " ?> <?php if(!$editable) echo "value = '$data1'" ?>>
			</div>

			<div class="row">
				<p class="text-q">2. La tarea sigue los procedimientos establecidos. </p>
				<input type="number" class="input-q" min="1" max="7" name="q2" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data2'" ?>>
			</div>

			<div class="row">
				<p class="text-q">3. La tarea es completada sin cometer errores. </p>
				<input type="number" class="input-q" min="1" max="7" name="q3" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data3'" ?>>
			</div>

            <p class="text-eficacia">Eficiencia</p>

			<div class="row">
				<p class="text-q">4. La tarea se puede realizar en un tiempo aceptable. </p>
				<input type="number" class="input-q" min="1" max="7" name="q4" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data4'" ?>>
			</div>

			<div class="row">
				<p class="text-q">5. La tarea se puede desarrollar de manera intuitiva. </p>
				<input type="number" class="input-q" min="1" max="7" name="q5" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data5'" ?>>
			</div>

			<div class="row">
				<p class="text-q">6. La tarea se puede ejecutar sin necesidad de ayuda.. </p>
				<input type="number" class="input-q" min="1" max="7" name="q6" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data6'" ?>>
			</div>

            <p class="text-tarea">TAREA 2: Actualizar cursos y horarios</p>
            <p class="text-eficacia">Eficacia</p>

			<div class="row">
				<p class="text-q">1. La tarea está automatizada completamente. </p>
				<input type="number" class="input-q" min="1" max="7" name="q7" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data7'" ?>>
			</div>

			<div class="row">
				<p class="text-q">2. La tarea sigue los procedimientos establecidos. </p>
				<input type="number" class="input-q" min="1" max="7" name="q8" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data8'" ?>>
			</div>

			<div class="row">
				<p class="text-q">3. La tarea es completada sin cometer errores. </p>
				<input type="number" class="input-q" min="1" max="7" name="q9" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data9'" ?>>
			</div>

            <p class="text-eficacia">Eficiencia</p>

			<div class="row-ult">
				<p class="text-q">4. La tarea se puede realizar en un tiempo aceptable. </p>
				<input type="number" class="input-q" min="1" max="7" name="q10" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data10'" ?>>
			</div>

            <div class="row-ult">
				<p class="text-q">5. La tarea se puede desarrollar de manera intuitiva. </p>
				<input type="number" class="input-q" min="1" max="7" name="q11" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data11'" ?>>
			</div>

            <div class="row-ult">
				<p class="text-q">6. He necesitado aprender muchas cosas antes de poder utilizar correctamente el sistema. </p>
				<input type="number" class="input-q" min="1" max="7" name="q12" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data12'" ?>>
			</div>


            <p class="text-tarea">TAREA 3: Asignación docentes por curso.</p>
            <p class="text-eficacia">Eficacia</p>

			<div class="row">
				<p class="text-q">1. La tarea está automatizada completamente. </p>
				<input type="number" class="input-q" min="1" max="7" name="q13" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data13'" ?>>
			</div>

			<div class="row">
				<p class="text-q">2. La tarea sigue los procedimientos establecidos. </p>
				<input type="number" class="input-q" min="1" max="7" name="q14" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data14'" ?>>
			</div>

			<div class="row">
				<p class="text-q">3. La tarea es completada sin cometer errores. </p>
				<input type="number" class="input-q" min="1" max="7" name="q15" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data15'" ?>>
			</div>

            <p class="text-eficacia">Eficiencia</p>

			<div class="row-ult">
				<p class="text-q">4. La tarea se puede realizar en un tiempo aceptable. </p>
				<input type="number" class="input-q" min="1" max="7" name="q16" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data16'" ?>>
			</div>

            <div class="row-ult">
				<p class="text-q">5. La tarea se puede desarrollar de manera intuitiva. </p>
				<input type="number" class="input-q" min="1" max="7" name="q17" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data17'" ?>>
			</div>

            <div class="row-ult">
				<p class="text-q">6. He necesitado aprender muchas cosas antes de poder utilizar correctamente el sistema. </p>
				<input type="number" class="input-q" min="1" max="7" name="q18" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data18'" ?>>
			</div>

            <p class="text-tarea">TAREA 4: Gestión de matrícula</p>
            <p class="text-eficacia">Eficacia</p>

			<div class="row">
				<p class="text-q">1. La tarea está automatizada completamente. </p>
				<input type="number" class="input-q" min="1" max="7" name="q19" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data19'" ?>>
			</div>

			<div class="row">
				<p class="text-q">2. La tarea sigue los procedimientos establecidos. </p>
				<input type="number" class="input-q" min="1" max="7" name="q20" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data20'" ?>>
			</div>

			<div class="row">
				<p class="text-q">3. La tarea es completada sin cometer errores. </p>
				<input type="number" class="input-q" min="1" max="7" name="q21" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data21'" ?>>
			</div>

            <p class="text-eficacia">Eficiencia</p>

			<div class="row-ult">
				<p class="text-q">4. La tarea se puede realizar en un tiempo aceptable. </p>
				<input type="number" class="input-q" min="1" max="7" name="q22" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data22'" ?>>
			</div>

            <div class="row-ult">
				<p class="text-q">5. La tarea se puede desarrollar de manera intuitiva. </p>
				<input type="number" class="input-q" min="1" max="7" name="q23" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data23'" ?>>
			</div>

            <div class="row-ult">
				<p class="text-q">6. He necesitado aprender muchas cosas antes de poder utilizar correctamente el sistema. </p>
				<input type="number" class="input-q" min="1" max="7" name="q24" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data24'" ?>>
			</div>


            <p class="text-tarea">TAREA 5: Gestión de programación académica.</p>
            <p class="text-eficacia">Eficacia</p>

			<div class="row">
				<p class="text-q">1. La tarea está automatizada completamente. </p>
				<input type="number" class="input-q" min="1" max="7" name="q25" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data25'" ?>>
			</div>

			<div class="row">
				<p class="text-q">2. La tarea sigue los procedimientos establecidos. </p>
				<input type="number" class="input-q" min="1" max="7" name="q26" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data26'" ?>>
			</div>

			<div class="row">
				<p class="text-q">3. La tarea es completada sin cometer errores. </p>
				<input type="number" class="input-q" min="1" max="7" name="q27" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data27'" ?>>
			</div>

            <p class="text-eficacia">Eficiencia</p>

			<div class="row-ult">
				<p class="text-q">4. La tarea se puede realizar en un tiempo aceptable. </p>
				<input type="number" class="input-q" min="1" max="7" name="q28" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data28'" ?>>
			</div>

            <div class="row-ult">
				<p class="text-q">5. La tarea se puede desarrollar de manera intuitiva. </p>
				<input type="number" class="input-q" min="1" max="7" name="q29" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data29'" ?>>
			</div>

            <div class="row-ult">
				<p class="text-q">6. He necesitado aprender muchas cosas antes de poder utilizar correctamente el sistema. </p>
				<input type="number" class="input-q" min="1" max="7" name="q30" required <?php if(!$editable) echo "disabled" ?> <?php if(!$editable) echo "value = '$data30'" ?>>
			</div>


		</div>
		
		<input style="visibility:hidden;" value="<?php echo $_SESSION['id_usuario'] ?>" name="valorid"></input>
		
		<br><center>
		<input class="button" type="submit" name ="crear" <?php if(!$editable) echo 'style="visibility: hidden;"' ?> <?php if(!$editable) echo ' style="background: #212529 !important;"' ?>>
		</center>
		</form>

       

		

	</div>
	
</body>


</html>