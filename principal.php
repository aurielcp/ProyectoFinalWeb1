<?php
session_start();
$no_cuenta = $_SESSION['usermane']; //320227552

if (!isset($no_cuenta)) {
    header("location: ./index.php");
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Alumnos</title>
    <link rel="stylesheet" href="estilos/stylesPrincipal.css"> <!-- Archivo CSS -->
</head>

<body>

    <header>
    <h1>Tu número de cuenta es <?php echo $no_cuenta; ?></h1>
    </header>

    <main>
        <a href='logica/salir.php'>SALIR</a>

        <?php
        require "./logica/conexion.php";
        mysqli_set_charset($conexion, 'utf8');

        // Generar el query
        $consulta_sql = "SELECT * FROM alumno";
        $resultado = $conexion->query($consulta_sql);
        $count = mysqli_num_rows($resultado); 

        echo "<table>
            <tr>       
                <th>Número de cuenta</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Fecha de registro</th>
            </tr>";

        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $row['no_cuenta'] . "</td>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['apellido'] . "</td>";
                echo "<td>" . $row['direccion'] . "</td>";
                echo "<td>" . $row['telefono'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['fecha_registro'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>Sin ningún registro</td></tr>";
        }
        echo "</table>";
        ?>
        <div class="links">
            <h2><a href='eliminar.php'>Eliminar alumno</a></h2>
            <h2><a href='registro.php'>Registrar alumno</a></h2>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Sistema de Gestión de Alumnos.</p>
        <div class="social-links">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">LinkedIn</a>
        </div>
    </footer>
</body>
</html>
<?php
}
?>
