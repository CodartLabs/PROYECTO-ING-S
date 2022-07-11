
<?php 

/* $host = "localhost";
$database ="photo_stock";
$user ="root";
$pass ="";
$conexion  = new mysqli($host, $user, $pass, $database); */
include "controladores/conexion.php";

/* include_once "conexion.php";  */
/* $id = $_SESSION['id_usuario']; */
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