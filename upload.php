<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>SubirArchivo</title>
  <link rel="stylesheet" href="assets/css/upload_form.css">
</head>

  <div class="custom-main"></div>
  <?php
    include_once "controladores/comprobar_sesion.php";
    if (!estaLogeado()) {
      header("Location: login.php");
      die();
    }
    require_once "templates/header.php";
    include "controladores/subir_foto.php";
  ?>

  <div class="uploadWrapper">
    <form id="imageUploadForm" class="contacto imageUploadForm" method = "post" enctype="multipart/form-data">
      <section class="form-img">
      <span class="helpText" id="helpText">Subir una imagen</span>
        <input type='file' name = "imagen" id="file" class="uploadButton" accept="image/*" required/>
      <div id="uploadedImg" class="uploadedImg">
        <span class="unveil"></span>
      </div>
      </section>
      <section class="form-texto">
    <div><label>Titulo:</label><input type="text"  name = "titulo" placeholder ="Escribe el titulo de la imagen" required></div>
    <div><label>Descripcion:</label><textarea name = "descripcion" rows="6" required></textarea></div>
      <div class="select">
        <select name = "seleccion" required>
          <option value="">Seleccione una categoria</option>
          <?php include_once "controladores/obtener_categorias.php";?>
        </select>
      </div>

      <input type="submit" value="Publicar">

      </section>
    </form>
  </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="assets/scripts/upload_script.js"></script>
</body>
</html>
