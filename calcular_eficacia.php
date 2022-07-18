<link rel="stylesheet" href="assets/css/modal_encuesta.css">
<?php 

#CALCULAR PUNTUACION ENCUESTA SUS
include "controladores/conexion.php";

$id = $_POST["valorid"]; 

//Definimos zona horaria
ini_set('date.timezone', 'America/Lima');
if (isset($_POST['crear'])) {

    $q1=trim($_POST['q1']);
    $q2=trim($_POST['q2']);
    $q3=trim($_POST['q3']);
    $q4=trim($_POST['q4']);
    $q5=trim($_POST['q5']);
    $q6=trim($_POST['q6']);
    $q7=trim($_POST['q7']);
    $q8=trim($_POST['q8']);
    $q9=trim($_POST['q9']);
    $q10=trim($_POST['q10']);
    $q11=trim($_POST['q11']);
    $q12=trim($_POST['q12']);
    $q13=trim($_POST['q13']);
    $q14=trim($_POST['q14']);
    $q15=trim($_POST['q15']);
    $q16=trim($_POST['q16']);
    $q17=trim($_POST['q17']);
    $q18=trim($_POST['q18']);
    $q19=trim($_POST['q19']);
    $q20=trim($_POST['q20']);
    $q21=trim($_POST['q21']);
    $q22=trim($_POST['q22']);
    $q23=trim($_POST['q23']);
    $q24=trim($_POST['q24']);
    $q25=trim($_POST['q25']);
    $q26=trim($_POST['q26']);
    $q27=trim($_POST['q27']);
    $q28=trim($_POST['q28']);
    $q29=trim($_POST['q29']);
    $q30=trim($_POST['q30']);
    $fechareg=date('d-m-Y h:i:s a',time());

    $promedio1 = $q1 + $ $q2;

   

  


        //Consulta sql para insertar datos
		$insertar_dato = "INSERT INTO cuestionario(id_usuario, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, p21, p22, p23, p24, p25, p26, p27, p28, p29, p30, fecha_reg, resultado) VALUES ('$id','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10', '$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$q24','$q25','$q26','$q27','$q28','$q29','$q30','$fechareg','$promedio1')";
		
        //$resultado = mysqli_query($conexion,$insertar_dato);

       try{
        if(mysqli_query($conexion,$insertar_dato)) { 
            header("Location: cuestionario.php");
            
        }else {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            ?>
            <!-- <div class="modal-contenido" *ngIf="true">
               <a href="index.php" title="Close" class="close">X</a>
               <h2 class="error">ERROR AL REGISTRAR ENCUESTA</h2>
               <p>Ha ocurrido un error, por favor inténtelo de nuevo más tarde</p>
               <a href="index.php" class="buttonb button3">Cerrar</a>
           </div> -->
           <?php  
        }
    }catch(\Throwable $th) {
        ?>
            <div class="modal-contenido" *ngIf="true">
               <a href="index.php" title="Close" class="close">X</a>
               <h2 class="error">ERROR AL REGISTRAR ENCUESTA</h2>
               <p>Ha ocurrido un error, por favor inténtelo de nuevo más tarde</p>
               <a href="index.php" class="buttonb button3">Cerrar</a>
           </div>
           <?php  
           /* header('Location: ' . $_SERVER['HTTP_REFERER']); */
    }

}

?>
<script>
function ocultar(){
    var campo = document.getElementById("mensajeConforme");
        campo.style.visibility = "hidden";
}
</script>




<!-- div class="modal-contenido" *ngIf="true" id="mensajeConforme">
                <a  title="Close" class="close" onclick="ocultar()">X</a>
                <h2 class="ok">ENCUESTA REGISTRADA</h2>
                <h4 class="ok">Gracias por su tiempo.</h4>
                <a href="index.php" class="buttonb button1">Volver al Inicio</a>
                <a class="buttonb button1" onclick="ocultar()">Quedarme aquí</a>
                
            </div>   -->