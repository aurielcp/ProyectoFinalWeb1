<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/stylesRegistro.css">
    <script src="estilos/scriptsRegistro.js" defer></script> 

    <title>Document</title>
</head>
<body>
    <header >
        <h1>Registro de alumnos ICO</h1>
    </header>
    <div  >
        <form action="./logica/enviarRegistro.php" method="post">
            <hr>
            <div>
                <label for="no_cuenta">Ingresa número de cuenta:</label>
                <input type="text" name="no_cuenta" required maxlength="100" placeholder="Ingresa número de cuenta">
                <br><br>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required maxlength="100" placeholder="Ingresa el nombre">
                <br><br>
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" required maxlength="100" placeholder="Ingresa tu apellido">
                <br><br>
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" required maxlength="100" placeholder="Ingresa tu domicilio">
                <br><br>
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" required maxlength="100" placeholder="Ingresa tu número telefónico">
                <br><br>
                <label for="email">Correo:</label>
                <input type="mail" name="email" required maxlength="100" placeholder="Ingresa tu correo electrónico">
                <br><br>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" required maxlength="8" placeholder="Ingresa tu contraseña">
                <br><br>
            </div>
            <button type="submit" name="submit">Enviar registro</button>
        </form>
    </div>
</body>
</html>

<div class="links">
    <h2><a href='registro.php'>Nuevo registro</a></h2>
    <h2><a href='principal.php'>Ver registros</a></h2>
</div>