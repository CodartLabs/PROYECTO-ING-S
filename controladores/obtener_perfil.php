<?php
    if (isset($profile) and is_numeric($profile) and $profile>0 ){
    include_once "conexion.php";
    $sql = "CALl info_general($profile);";
    $result = mysqli_query($conexion,$sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $id_usuario = $row['id_usuario'];
            if(!is_numeric($id_usuario) ) die(include_once "templates/no_results.html");
            $username = $row['username'];
            $nombres = $row['nombres'];
            $apellidos = $row['apellidos'];
            $foto_perfil = $row['foto'];
            $sobre_mi = $row['sobre_mi'];
            $fotos_subidas = $row['fotos_subidas'];
            $blogs_subidos = $row['blogs_subidos'];
            $direccion = $row['direccion'];
            $nacimiento = $row['nacimiento'];
            $correo = $row['correo'];
            if ($correo == null || $correo =="")$correo = "<i>No disponible</i>";
        }
        if($sobre_mi ==null || $sobre_mi=="") $sobre_mi ="Hola soy $nombres $apellidos, bienvenido a mi perfil";
        if($foto_perfil==null)$foto_perfil = 'assets/users/default.png';
        else{
        if (file_exists("assets/users/$foto_perfil")) $foto_perfil = "assets/users/$foto_perfil";
        else $foto_perfil = 'assets/users/default.png';}}
    }else{
            include_once "templates/lost.html";
            die();
        }



?>