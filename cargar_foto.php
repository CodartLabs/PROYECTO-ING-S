<?php
$host = "localhost";
$database ="photo_stock";
$user ="root";
$pass ="";
$conexion  = new mysqli($host, $user, $pass, $database);
/* include_once "conexion.php";  */
/* $id = $_SESSION['id_usuario']; */
$id = $_POST["valorid"]; 

try {
    if($_FILES["archivo"]){
        $nombre_base = basename($_FILES["archivo"]["name"]);
        $nombre_final = date("d-m-y")."-".date("H-i-s")."-".$nombre_base;
        $ruta = "assets/users/".$nombre_final;
        $subirarchivo = move_uploaded_file($_FILES["archivo"]["tmp_name"],$ruta);
    
        if($subirarchivo){
            $sql = "UPDATE usuarios SET foto = '$nombre_final' WHERE id_usuario = $id";
            $result = mysqli_query($conexion, $sql);
            if($result){
                echo "<script>alert('Se registro foto');</script>";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else{
                print("Errormessage: %s\n". mysqli_error($conexion));
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        
        }
    
    }else{
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
} catch (Throwable $th) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} finally{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}



?>