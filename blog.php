<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/blog.css">
    <title>Blog</title>
</head>
<body>

    <div class="custom-main">
    <?php 
    include "templates/header.php";
    include "controladores/obtener_blog.php";
    ?>
    <h1 class="titulo"><?php echo $titulo; ?></h1>
    <h3 class="autor"><?php echo "$autor ($fecha)"; ?></h3>
    <p class="contenido">
        <?php echo $contenido; ?>
    </p>
    </div>  
</body>
</html>