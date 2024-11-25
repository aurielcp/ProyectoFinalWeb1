<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/stylesEnviarRegistro.css">
    <script src="estilos/scriptsRegistro.js" defer></script> 
   
    <title>Enviar Registro</title>

</head>
<body>

<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');

    $buscarusuario="SELECT * FROM alumno WHERE no_cuenta ='$_POST[no_cuenta]'";

$resultado = $conexion -> query($buscarusuario);
$count =mysqli_num_rows($resultado);
if($count==1){
    echo"<h1>El usuario ya esta registrado</h1>";
    echo "<h2><a href=' ../registro.php'>Nuevo registro</a></h2>";

}else{

    mysqli_query($conexion,"INSERT INTO alumno(no_cuenta, nombre, apellido, direccion, telefono, email, password)
        VALUES(
            '$_POST[no_cuenta]',
            '$_POST[nombre]',
            '$_POST[apellido]',
            '$_POST[direccion]',
            '$_POST[telefono]',
            '$_POST[email]',
            '$_POST[password]'
        )");
        echo "<br> <h1>Usuario creado con exito</h1>";
        echo "<a href='../registro.php'>Generar un nuevo registro</a>";
        echo "<a href='../principal.php'>Ver registros</a>";
}
?>
</body>
</html>