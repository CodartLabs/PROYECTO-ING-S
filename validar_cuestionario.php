<?php 

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
$data11=0;
$data12=0;
$data13=0;
$data14=0;
$data15=0;
$data16=0;
$data17=0;
$data18=0;
$data19=0;
$data20=0;
$data21=0;
$data22=0;
$data23=0;
$data24=0;
$data25=0;
$data26=0;
$data27=0;
$data28=0;
$data29=0;
$data30=0;
$totalPuntaje=0;
$_SESSION['display'] = 'none';
$passed;

    //Consulta sql para consulta datos
	$consulta = "SELECT * FROM cuestionario WHERE id_usuario = '$id'";
		
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
            $data11 = $data['p11'];
            $data12 = $data['p12'];
            $data13 = $data['p13'];
            $data14 = $data['p14'];
            $data15 = $data['p15'];
            $data16 = $data['p16'];
            $data17 = $data['p17'];
            $data18 = $data['p18'];
            $data19 = $data['p19'];
            $data20 = $data['p20'];
            $data21 = $data['p21'];
            $data22 = $data['p22'];
            $data23 = $data['p23'];
            $data24 = $data['p24'];
            $data25 = $data['p25'];
            $data26 = $data['p26'];
            $data27 = $data['p27'];
            $data28 = $data['p28'];
            $data29 = $data['p29'];
            $data30 = $data['p30'];
            $totalPuntaje = $data['promedio1'];
            $_SESSION['display'] = 'contents';
            /* if (str_contains($totalPuntaje,".00")){
                str_replace("0.00"," ",$totalPuntaje);
            } */
		}
    } catch (\Throwable $th) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

?>