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
    $fechareg=date('d-m-Y h:i:s a',time());

    //Suma # impares
    $sumaImp = $q1 + $q3 + $q5 + $q7 + $q9 - 5;
    //Suma # pares
    $sumaPar = 25 - ($q2 + $q4 + $q6 + $q8 + $q10);
    //Total
    $resultado = ($sumaImp + $sumaPar) * 2.5;

        //Consulta sql para insertar datos
		$insertar_dato = "INSERT INTO encuesta(id_usuario, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, fecha_reg, resultado) VALUES ('$id','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$fechareg','$resultado')";
		
        //$resultado = mysqli_query($conexion,$insertar_dato);

       try{
        if(mysqli_query($conexion,$insertar_dato)) { 
            header("Location: encuesta.php");
            
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