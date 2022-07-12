
<?php 
include "controladores/conexion.php";
$Sumatotal=0;
$numEncuestados=0;
$totalPuntaje=0;
    //Consulta sql para consulta datos
	$consulta = "SELECT * FROM encuesta";
    $resultado = mysqli_query($conexion,$consulta );
    $data = mysqli_fetch_array($resultado);
    try {
        if (mysqli_num_rows($resultado)>0) {
			foreach ($resultado as $element ) {
                $Sumatotal = $Sumatotal + $element['resultado'];
            }
            $numEncuestados = mysqli_num_rows($resultado);
            $totalPuntaje = $Sumatotal / $numEncuestados;
		}
    } catch (\Throwable $th) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>