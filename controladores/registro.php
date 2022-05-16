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
         if(mysqli_query($conexion,$sql)) echo "alert('Actualizado Correctamente')";
         else $error = "Usuario ya existe, prueba con otro";


    }else $error = "Los campos están vacíos";
}


?>