<?php 
include "conexion.php";
if ($_POST){
    $error ="";
    if (isset($_POST['username']) and isset($_POST['password'])){
        $user = $_POST['username'];
        $password = $_POST['password'];
        $sql = "CALL login ('$user','$password');";
        $result = mysqli_query($conexion,$sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $id_usuario = $row['id_usuario'];
                $username = $row['username'];
                $nombres = $row['nombres'];
                $apellidos = $row['apellidos'];
                $foto_perfil = $row['foto'];
            }
            if($foto_perfil==null)$foto_perfil = 'assets/users/default.png';
            else{
            if (file_exists("assets/users/$foto_perfil")) $foto_perfil = "assets/users/$foto_perfil";
            else $foto_perfil = 'assets/users/default.png';}
            session_start();
            $_SESSION['id_usuario']=$id_usuario;
            $_SESSION['username']=$username;
            $_SESSION['nombres']=$nombres;
            $_SESSION['apellidos']=$apellidos;
            $_SESSION['foto_perfil']= $foto_perfil;

            header("Location: index.php");
         } else $error = "Usuario o contraseña incorrecta";
    }else $error = "Los campos no pueden estar vacíos";
}

?>