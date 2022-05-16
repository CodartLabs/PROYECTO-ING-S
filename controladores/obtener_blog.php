<?php
if (isset($_GET["id_blog"])){
    $id_blog = $_GET["id_blog"];
    $sql = "CALL obtener_blog($id_blog);";
    include_once "conexion.php";
    $result = mysqli_query($conexion, $sql);


    if (mysqli_num_rows($result) > 0) {
    
        while($row = mysqli_fetch_assoc($result)) {
            $titulo = $row['nombre_blog'];
            $id_blog =$row['id_blog'];
            $apellidos = $row['apellidos'];
            $nombres = $row['nombres'];
            $contenido = $row['contenido'];
            $autor = "$apellidos $nombres";
            $fecha = $row['fecha_blog'];
    
            ?>

        <?php }
        }else echo "No se han encontrado resultados";


}else{?>
    <h1>Parece que te has perdido </h1>
    <h1><a href="index.php">Volver al home </a></h1>

<?php 
die();
}

?>