
<?php 

/* $host = "localhost";
$database ="photo_stock";
$user ="root";
$pass ="";
$conexion  = new mysqli($host, $user, $pass, $database); */
include "controladores/conexion.php";

/* include_once "conexion.php";  */
/* $id = $_SESSION['id_usuario']; */
$id = $_SESSION['id_usuario'];
$editable = true;
$data1=0;
$data2=0;
$data3=0;
$data4=0;
$data5=0;
$data6=0;
$data7=0;
$data8=0;
$data9=0;
$data10=0;
$totalPuntaje=0;
$_SESSION['display'] = 'none';

    //Consulta sql para consulta datos
	$consulta = "SELECT * FROM encuesta WHERE id_usuario = '$id'";
		
    $resultado = mysqli_query($conexion,$consulta );
    $data = mysqli_fetch_array($resultado);

    try {
        if (mysqli_num_rows($resultado)>0) {
			$editable = false;
            $data1 = $data['p1'];
            $data2 = $data['p2'];
            $data3 = $data['p3'];
            $data4 = $data['p4'];
            $data5 = $data['p5'];
            $data6 = $data['p6'];
            $data7 = $data['p7'];
            $data8 = $data['p8'];
            $data9 = $data['p9'];
            $data10 = $data['p10'];
            $totalPuntaje = $data['resultado'];
            $_SESSION['display'] = 'contents';
            /* if (str_contains($totalPuntaje,".00")){
                str_replace("0.00"," ",$totalPuntaje);
            } */
		}
    } catch (\Throwable $th) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

?>