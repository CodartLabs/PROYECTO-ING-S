<link rel="stylesheet" href="assets/css/login.css">
<?php
if($_POST){
    $error = "";
    if (isset($_POST['enviar']) and isset($_POST['username']) and isset($_POST['password'])and isset($_POST['nombres'])
    and isset($_POST['apellidos']) and isset($_POST['fecha']) and isset($_POST['direccion'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $fecha = $_POST['fecha'];
        $direccion = $_POST['direccion'];
        $sobre_mi = $_POST['sobre_mi'];

        $sql = "CALL registrar('$username', '$password','$nombres','$apellidos',
        '$fecha','$direccion','$sobre_mi');";

        include_once "conexion.php";

        try {
            if(mysqli_query($conexion,$sql)) { 
                ?>
                <div class="modal-contenido" *ngIf="true">
                    <a href="register.php" title="Close" class="close">X</a>
                    <h2 class="ok">REGISTRO EXITOSO</h2>
                    <p>¿Que desea hacer?</p>
                    <a href="register.php" class="buttonb button1">Registrarse</a>
                    <a href="login.php" class="buttonb button2">Iniciar Sesión</a>
                    
                </div>  
                <?php
            }else {
                ?>
                <div class="modal-contenido" *ngIf="true">
                   <a href="register.php" title="Close" class="close">X</a>
                   <h2 class="error">ERROR AL REGISTRAR</h2>
                   <p>El Usuario ya existe, pruebe con otro.</p>
                   <a href="register.php" class="buttonb button3">Cerrar</a>
               </div>
               <?php  
            }
        } catch (\Throwable $th) {
            ?>
                <div class="modal-contenido" *ngIf="true">
                   <a href="register.php" title="Close" class="close">X</a>
                   <h2 class="error">ALGO SALIO MAL</h2>
                   <p>Al Parecer el Usuario ya existe, pruebe con otro.</p>
                   <a href="register.php" class="buttonb button3">Cerrar</a>
               </div>
               <?php 
        }

         
         

         echo "";


    }else $error = "Los campos están vacíos";
}


?>

