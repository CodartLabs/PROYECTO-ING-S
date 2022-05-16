<?php
include "conexion.php";
if (isset($_COOKIE["ultima-categoria"])){
    $categoria = $_COOKIE["ultima-categoria"];
    $sql = "CALL fotos_cookies($categoria)";
}else $sql = "CALL fotos_interaccion;";

$result = mysqli_query($conexion,$sql);
while(mysqli_next_result($conexion)){;}


if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        $ruta = $row['archivo'];
        $visualizaciones = $row['visualizaciones'];
        $id_foto = $row['id_foto'];
        $titulo = $row['titulo'];
        $fecha_foto = $row['fecha_foto'];

        if (file_exists("assets/fotos/$ruta")){
            $rutaFinal = "assets/fotos/$ruta";
        }
        else{
           $rutaFinal = 'assets/fotos/default.jpg';
        }

        ?>
        <!------------------------INTRODUCIR ACÁ EL CODIGO PARA LA IMAGEN------------>

           <a href="foto.php?id=<?php echo $id_foto ?>"> <img class="grid-item" src="<?php echo $rutaFinal?>"/></a>

       <!------------------------FINALIZA CODIGO DE IMAGEN------------> 
    <?php }
    }else echo "No se han encontrado resultados";



?>