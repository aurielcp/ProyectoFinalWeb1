<?php
$user_db="root";
$pass_db="";
$db_name="Ico";
$host_db="127.0.0.1:3306"; 
$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);
if($conexion-> connect_error){
    die("La conexion no se estableció: ".$conexion->connect_error);
}
?>