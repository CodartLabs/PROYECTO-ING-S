<?php
  $sql2 = "SELECT LAST_INSERT_ID();";
  $lastInsert1= mysqli_query($conexion,$sql2);
  while($row1 = mysqli_fetch_assoc($lastInsert1)){
  $lastInsert2 = $row1['LAST_INSERT_ID()'];
  }
?>