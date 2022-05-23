
  <?php
    require_once "templates/header.php";
    include "controladores/conexion.php";
    include_once "controladores/comprobar_sesion.php";
    if (!estaLogeado()) {
      header("Location: login.php");
      die();
    }

  if(isset($_GET['id'])){
    $idFoto = $_GET['id'];
    $delete = $conexion ->query("UPDATE fotos SET estado=1 WHERE id_foto=$idFoto");
    if($delete == true){
      $mensaje = 'La imagen fué eliminado correctamente !';
      $style = 'success';
    }else{
      $mensaje = 'Ha sucedido un error !';
      $style = 'danger';
    }
  }
  ?>

  <?php $fotos=$conexion->query("SELECT * from fotos WHERE estado=0"); ?>
  <div class="grid-container fotos-populares m-5">
    <div class="container">
        <h2>Todas mis fotos</h2>
        <!-- 🔥🔥 ALERTA  -->
        <?php if(isset($mensaje)) { ?>
        <div class="alert alert-<?=$style;?> alert-dismissible fade show" role="alert">
          <?=$mensaje; ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php } ?>
        <!-- FIN ALERTA  -->
        <div class="row">
          <?php foreach($fotos as $item){?>
            <div class="col-md-4 mt-3 mb-3">
                <div class="card" style="height:100%">
                  <div class="card-body" >
                    <img src="assets/fotos/<?= $item['archivo'] ?>" class="card-img-top" alt="Img" height="100%">
                  </div>
                  <div class="card-footer">
                    <a href="eliminar_foto.php?id=<?= $item['id_foto'] ?>" class="btn btn-danger btn-block" name="btnEliminar"> ELiminar
                    <i class="fa-solid fa-trash"></i>
                    </a>
                  </div>
              </div>
            </div>
            <?php } ?>
          </div>
      </div>
    </div>
  </div>
</body>
</html>




