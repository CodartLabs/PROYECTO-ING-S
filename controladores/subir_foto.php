<?php
if($_POST){
include_once "conexion.php";
$id_categoria =$_POST['seleccion'];
$titulo = $_POST['titulo'];
$descripcion =$_POST['descripcion'];
$file = $_FILES['imagen']['name'];
$id_usuario = $_SESSION['id_usuario'];
$sql = "CALL agregar_foto($id_usuario, $id_categoria,'$titulo','$descripcion');";
mysqli_query($conexion,$sql);
while(mysqli_next_result($conexion)){;}
include "last_insert.php";
while(mysqli_next_result($conexion)){;}
function obtenerExtensionFichero($str)
{
return end(explode(".", $str));
}
$extension = obtenerExtensionFichero($file);
$tmp_name = $_FILES['imagen']['tmp_name'];
$ruta = "assets/fotos/$lastInsert2.$extension";
move_uploaded_file($tmp_name, $ruta);
$archivo = "$lastInsert2.$extension";
echo $archivo;

$sql2 = "CALL actualizar_archivo('$archivo',$lastInsert2);";
echo $sql2;
mysqli_query($conexion,$sql2);
header("Location: foto.php?id=$lastInsert2");
}



?>