<?php
$id_insertado="";
if ($_POST){
    if (isset($_POST['titulo']) and !empty($_POST['titulo'])
    and isset($_POST['contenido'])and !empty($_POST['contenido'])){
        $error ="";
        include_once "conexion.php";
        $id_usuario = $_SESSION['id_usuario'];
        $titulo = $_POST['titulo'];
        $contenido =$_POST['contenido'];

        $sql ="CALL crear_blog ('$titulo','$contenido',$id_usuario,null);";
        if(mysqli_query($conexion,$sql)){
            include_once "last_insert.php";
            header("Location: blog.php?id_blog=$lastInsert2");
        }
    }else $error  = "No se han llenado todos los campos";
}
?>