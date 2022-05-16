<?php
include_once"conexion.php";
if (isset($_POST)){
    if (isset($_POST['comentario'])){
        $comentario = $_POST['comentario'];
        $id_foto = $id;
        $id_usuario = $_SESSION['id_usuario'];
        $sql = "CALL comentar_foto($id_foto,$id_usuario,'$comentario');";
        $result = mysqli_query($conexion,$sql);
        while(mysqli_next_result($conexion)){;}
        header("Refresh:1");
    }else $error = "No se ha establecido un comentario";

}
?>