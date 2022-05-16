<?php
include_once "conexion.php";
$sql = "CALL obtener_categorias;";
$result = mysqli_query($conexion,$sql);
while(mysqli_next_result($conexion)){;}

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $id_categoria = $row['id_categoria'];
        $categoria = $row['nombre_categoria'];

        echo"<option value='$id_categoria'> $categoria</option>";

    }


}


?>