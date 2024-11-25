<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/stylesRegistro.css">
    <script src="estilos/eliminar.js" defer></script> 
    <title>Eliminar</title>
</head>

<body>

    <header>
        <h1>Elimina Alumno</h1>
    </header>

    <form style=" text-align: center;" method="POST" action="./logica/eliminarRegistro.php">

        <input  type="text" name="no_cuenta" placeholder="Numero de Cuenta" required maxlength="10"/>
        <br />
        <button type="submit" name = "sumbmit" >Eliminar usuario</button>
    </form>

</body>
</html>

<div class="links">
    <h2><a href='/principal.php'>Ver registros</a></h2>
</div>