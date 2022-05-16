<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/vista_foto.css">
    <title>Fotos</title>
</head>
<body>

    <div class="custom-main">
    <?php 
        include "templates/header.php"; 
        $id = $_GET['id'];
        if(is_numeric($id))include "controladores/detalles_foto.php";
        else {
            include "templates/lost.html";
            die();
        }
    ?>
    <div class = "flex">
        <figure>
            <center><img src="<?php echo $rutaFinal?>"/></center>
        </figure>
        <div class="detalles">
        <h1><?php echo $titulo; ?></h1>
        <h3>Subida por: <a href="profile.php?profile_id=<?php echo $id_publicador?>"><?php echo $fullName;?> </span><span></a></h3>
        <h4>Categoria: <?php echo $categoria;?></span></h4>
        <h2>Descripción</h2>
            <p> <?php echo $descripcion ?></p>
            <p> <?php echo $visualizaciones." visualizaciones" ?></p>
            </div>
    </div>
    <div class="final">
        <section class="izquierda">
            <h2 class="comentario">FeedBack</h2>

            <?php if (estaLogeado()){
                include_once "controladores/añadir_comentario.php";?>
            <form class ="form-detalle" method="post">
                <input class ="input" type="text"placeholder="Escribe un comentario..." name="comentario">
                <input class ="submit" type="submit" value="ENVIAR" id="boton" name ="enviar-comentario">
            </form> <?php }else {?>
            <h4 class = "inicia"> <a href="login.php"> Inicia sesión para poder comentar </a></h3> <?php	}?>
            <div class="comentarios">
                <div class="container-comments">
                    <?php include("controladores/ver_comentarios.php");?>
                </div>
            </div>
        </section>     
        <section class ="derecha">
            <h2 class="recom">Recomendados</h2>
            <div class="recom2">
                <?php include "controladores/obtener_fotos_recomendadas.php"; ?>
            </div>
        </section> 
    </div>
</body>
</html>