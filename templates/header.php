<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.css">
    <script src="assets/bootstrap/bootstrap.js"></script>
    <script src="assets/bootstrap/bootstrap.bundle.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/bootstrap/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark fixed-top custom-nav">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php">PhotoStock</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
  <?php 
    include_once "controladores/comprobar_sesion.php";
    if(estaLogeado()){
      $foto = $_SESSION['foto_perfil'];
    ?>

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blogs.php">Blogs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="encuesta.php?profile_id=<?php echo $_SESSION["id_usuario"];?>">Encuesta</a>
      </li>

    
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> <img class = "perfil" src=<?php echo $foto; ?> alt="Imagen de perfil de usuario"><?php echo $_SESSION ['nombres']; echo" ". $_SESSION['apellidos'];?>
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="profile.php?profile_id=<?php echo $_SESSION["id_usuario"];?>">Mi perfil</a></li>
          <?php if(esAdmin()) echo '<li><a href="upload.php">Subir fotos</a></li>
          <li><a href="crear_blog.php">Crear blog</a></li>
          <li><a href="estadistica.php">Estadisticas</a></li>
          <li><a href="eliminar_foto.php">Eliminar fotos</a></li>' ?>
          <li><a href="controladores/cerrar_sesion.php">Cerrar sesión</a></li>
        </ul>
      </div>
      <?php }
      else{
      ?>
        <li class="nav-item">
        <a class="nav-link" href="login.php">Iniciar Sesión</a>
        </li>
    <?php } ?>
    </ul>
    
  </div>
</nav>
<link rel="stylesheet" type="text/css" href="assets/css/main.css">


</body>
</html>