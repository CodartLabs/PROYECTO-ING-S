<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="assets/css/login.css">
</head>  
<body>
    <?php include 'controladores/comprobar_sesion.php';
    if(estaLogeado()) header ("Location: index.php");
    else include "controladores/iniciar_sesion.php";
    ?>
    
    <form class="formulario" method="POST">
    <h1>Login</h1>
    <h3 class = "error"><?php if ($_POST) echo $error;?></h3>
     <div class="contenedor">
         <div class="input-contenedor">
            <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Username" name ="username" required>
         </div>
         <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" placeholder="Password" name ="password" required>
         </div>
         <input type="submit" value="Login" class="button" name ="enviar" required>
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿No tienes una cuenta? <a class="link" href="register.php">Registrate</a></p>
     </div>
    </form>
</body>
</html>