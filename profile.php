<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" type="text/css" href="assets/css/perfil.css?3">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>
    <?php include_once "templates/header.php"; ?>
    <div class="custom-main"><?php 
        if (isset($_GET["profile_id"])){
            $profile = $_GET["profile_id"];
            include_once "controladores/obtener_perfil.php";
        }else{?>
        <h1>Parece que te has perdido </h1>
        <h1><a href="index.php">Volver al home </a></h1>
    <?php die();} ?>
    </div>
    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="<?php echo $foto_perfil?>" alt="img-avatar">
                    <?php 
                    include_once "controladores/comprobar_sesion.php";
                    if (estaLogeado()){
                    if ($profile == $_SESSION['id_usuario'] ){?>

                    <!-- FORM PARA ENVIAR Y GUARDAR FOTO USUARIO -->
                    <form method="post" action="cargar_foto.php" enctype="multipart/form-data">
                        <input type="file" name="archivo" id="file" style="display:none;" accept=".png, .jpeg, .jpg" onclick="mostrar()">
                        <label for="file" class="boton-avatar">
                            <a>
                            <!-- <div class="boton-avatar"> -->
                            <i class="fas fa-pen" for="file"></i> 
                            </a>
                        </label>
                        <div class="modal-contenido" id="mensajeConforme">
                            <a title="Close" class="close" onclick="ocultar()">X</a>
                            <h2 class="ok">SUBIENDO FOTO</h2>
                            <p>¿Que desea hacer?</p>
                            <a class="buttonb button3" onclick="ocultar()">Cancelar</a>
                            <button type="submit" class="buttonb button2">Guardar</button>
                            <input style="visibility:hidden;" value="<?php echo $_SESSION['id_usuario'] ?>" name="valorid"></input>
                         </div>  
                    </form>

                    <!-- <a href="editar_perfil.php"> <div class="boton-avatar">
                        <i class="fas fa-pen"></i> </a> -->
                    </div> <?php	} }?>
                </div>
               
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo"><?php echo "$nombres $apellidos"; ?></h3>
                <div class="subidos">
                    <span><p class="texto"><b>Fotos Subidas: </b> &nbsp;</p><?php echo $fotos_subidas; ?> </p></span>
                    <span><p class="texto"><b>Blogs Subidos: </b> &nbsp;</p><?php echo $blogs_subidos; ?> </p></span>
                </div>
                <p class ="about"> <?php echo $sobre_mi;?></p>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i class="icono fas fa-tags"></i></i> Username: <?php echo $username;?></li>
                    <li><i class="icono fas fa-envelope"></i> Ultimo Correo: <?php echo $correo;?></li>
                </ul>
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-marker-alt"></i> Ubicacion: &nbsp; <?php echo $direccion;?></li>
                    <li><i class="icono fas fa-calendar-alt"></i> Fecha nacimiento: &nbsp; <?php echo $nacimiento;?></li>
                </ul>
            </div>
            <br>
            <div class="menu-perfil">
                <ul>
                    <li><a href="#" title=""><i class="icono-perfil fas fa-bullhorn"></i>Publicaciones</a></li>
                    <li><a href="#" title=""><i class="icono-perfil fas fa-info-circle"></i>Informacion</a></li>
                    <li><a href="#" title=""><i class="fab fa-blogger-b"></i>Blog</a></li>
                    <li><a href="#" title=""><i class="icono-perfil fas fa-camera"></i>Fotos</a></li>
                </ul>
            </div>
            <div class="redes-sociales">
                <a href="https://www.facebook.com/christiam.delacruz.583" class="boton-redes facebook fab fa-facebook-f"><i class="icon-facebook"></i></a>
                <a href="#" class="boton-redes twitter fab fa-twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="boton-redes instagram fab fa-instagram"><i class="icon-instagram"></i></a>
            </div>
        </div>
    </section>
</body>
<script>
function mostrar() {
  identificadorTiempoDeEspera = setTimeout(retraso, 3000);
}
function retraso(){
    var campo = document.getElementById("mensajeConforme");
        campo.style.visibility = "visible";
}
function ocultar(){
    var campo = document.getElementById("mensajeConforme");
        campo.style.visibility = "hidden";
}
</script>
</html>

