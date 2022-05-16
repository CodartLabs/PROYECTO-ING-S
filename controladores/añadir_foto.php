<?php
if($_POST){
    if (isset($_POST['titulo']) and isset($_POST['descripcion']) 
    and isset($_POST['archivo']) and isset($_POST['categoria'])){
        include_once "conexion.php";
        $usuario =$_SESSION['id'];
        $categoria;
        $titulo=$_POST['titulo'];
        $descripcion=$_POST['descripcion'];
        $archivo ="";
        $sql="CALL agregar_foto ($usuario, $categoria,'$titulo','$descripcion');";
        $consulta = mysqli_query($conexion,$sql);
        while(mysqli_next_result($conexion)){;}

        if ($consulta){
            include_once "last_insert.php";
            $insert = last_Insert();
            $sql2 = "CALL actualizar_archivo($archivo,$insert);";

            
            

    }
    }
}


?>