<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');
$registroEliminado = $_POST['no_cuenta'];
$consulta="DELETE FROM alumno WHERE no_cuenta = ";

mysqli_query($conexion, $consulta . $registroEliminado);
mysqli_close($conexion);
header('Location: ../principal.php');
?>