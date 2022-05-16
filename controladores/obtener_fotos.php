<?php
include "conexion.php";
$sql = "CALL obtener_todas_fotos;";
$result = mysqli_query($conexion,$sql);

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        $ruta = $row['archivo'];
        $visualizaciones = $row['visualizaciones'];
        $username = $row['username'];
        $id_foto = $row['id_foto'];
        $nombre_categoria= $row['nombre_categoria'];
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