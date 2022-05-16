<?php
if (isset($id)and $id>0){
include_once "conexion.php";
$sql = "CALL get_comentarios ($id);";

$result = mysqli_query($conexion,$sql);
echo mysqli_error($conexion);

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        $comentario = $row['comentario_foto'];
        $fecha = $row['fecha_foto_comentario'];
        $usario_comentario = $row['username'];
        $nombre_comentario = $row['nombres'];
        $apellidos_comentario = $row['apellidos'];
        $perfil_comentario = $row['foto'];
        $fullName_comentario = "$nombre_comentario $apellidos_comentario";
        if($perfil_comentario==null)$perfil_comentario = 'assets/users/default.png';
        else{
        if (file_exists("assets/users/$perfil_comentario")) $perfil_comentario = "assets/users/$perfil_comentario";
        else $perfil_comentario = 'assets/users/default.png';}
        ?>
           <div class="comments">
                <div class="photo-perfil">
                    <img class ="comentador" src="<?php echo $perfil_comentario?>" alt="">
                </div>
                <div class="info-comments">
                    <div class="header">
                        <h4><?php echo $fullName_comentario?></h4>
                        <h5><?php echo $fecha?></h5>
                    </div>
                    <p> <?php echo $comentario?></p>
                </div>
           </div>
         
        <?php

   }}}
?>