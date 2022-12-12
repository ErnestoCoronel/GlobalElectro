<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include('empleado.php');

$nombre = $_POST['nombreempleado'];
$servicio = $_POST['servicio'];
$lugar = $_POST['lugar'];

$consulta = "INSERT INTO `udigital`.`empleados` (`nombre`, `servicio`, `lugar`) 
VALUES ('$nombre', '$servicio', '$lugar');";

$resultado = mysqli_query($conexion, );

?>
