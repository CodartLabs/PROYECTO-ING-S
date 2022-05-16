<?php
if (isset($id) and $id>0){
include "conexion.php";
$sql = "CALL get_foto('$id');";


$result = mysqli_query($conexion,$sql);
while(mysqli_next_result($conexion)){;}

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        $ruta = $row['archivo'];
        $descripcion = $row['descripcion'];
        $visualizaciones = $row['visualizaciones'];
        $username = $row ['username'];
        $id_foto = $row['id_foto'];
        $categoria= $row['nombre_categoria'];
        $titulo = $row['titulo'];
        $fecha_foto = $row['fecha_foto'];
        $id_categoria = $row['id_categoria'];
        $visualizaciones = $row['visualizaciones'];
        $nombre = $row['nombres'];
        $apellidos = $row['apellidos']; 
        $fullName = "$nombre $apellidos";
        $foto_publicador = $row['foto'];
        $id_publicador = $row['id_usuario'];

        setcookie("ultima-categoria", $id_categoria, time()+3600);


        if (file_exists("assets/fotos/$ruta")) $rutaFinal = "assets/fotos/$ruta";
        else $rutaFinal = 'assets/fotos/default.jpg';
        ?>
        <!------------------------INTRODUCIR ACÁ EL CODIGO PARA LA IMAGEN------------>

        
        

       <!------------------------FINALIZA CODIGO DE IMAGEN------------> 
    <?php } 
    
    $sql2 = "CALL visualizaciones ($id);";
    mysqli_query($conexion,$sql2);
    while(mysqli_next_result($conexion)){;}
}else {?>
    <br>
    <br>
    <h1>No se han encontrado resultados</h1>
    <h1><a href='index.php'>Volver al home </a></h1>
    
    <?php die();}}else{?>
    <h1>Parece que te has perdido </h1>
    <h1><a href="index.php">Volver al home </a></h1>

<?php die();}


?>