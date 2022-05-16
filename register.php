<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="assets/css/login.css">
</head>  
<body>
   <?php include_once "controladores/registro.php";?>
 <form class="formulario" method="POST">
    
    <h1>Registrate</h1>
    <h3 class="error"><?php if($_POST) echo $error; ?></h3>
     <div class="contenedor">

         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Username" name ="username" required>
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Password" name ="password" required>
         </div>

        <div class="input-contenedor">
        <i class="fas fa-user icon"></i>
        <input type="text" placeholder="Nombres" name="nombres" required>
        </div>

        <div class="input-contenedor">
        <i class="fas fa-user icon"></i>
        <input type="text" placeholder="Apellidos"name= "apellidos" required>
        </div>

        <div class="input-contenedor">
        <i class="fas fa-user icon"></i>
        <input type="date" name= "fecha" required>
        </div>

        <div class="input-contenedor">
        <i class="fas fa-user icon"></i>
        <input type="text" placeholder="Direccion" name="direccion" required>
        </div>

        <div class="input-contenedor">
        <i class="fas fa-user icon"></i>
        <input type="text" placeholder="SobreMi"name = "sobre_mi">
        </div>
        
         </div>
         <input type="submit" value="Registrate" class="button" name ="enviar">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="login.php">Iniciar Sesion</a></p>
     </div>
    </form>
</body>
</html>