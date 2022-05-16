<?php
include "conexion.php";
$sql = "CALL obtener_todos_blogs;";
$result = mysqli_query($conexion,$sql);

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        $nombre = $row['nombre_blog'];
        $id_blog =$row['id_blog'];
        $titulo = $row['nombre_blog'];
        $Nombres = $row['nombres'];
        $apellidos = $row['apellidos'];

        ?>
        <!------------------------INTRODUCIR ACÁ EL CODIGO PARA LA IMAGEN------------>

        <a href="blog.php?id_blog=<?php echo $id_blog;?>">
            <figure class = "grid-blog">
                <img clas = "img-blog" src="assets/img/blog.png" alt="">
                <figcaption><?php echo "Título: ".$titulo;?></figcaption>
                <figcaption><?php echo "Autor: $Nombres $apellidos";?></figcaption>
            </figure>
        </a>

       <!------------------------FINALIZA CODIGO DE IMAGEN------------> 
    <?php }
    }else echo "No se han encontrado resultados";



?>
?>