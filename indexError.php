<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Sistema</title>
    <link rel="stylesheet" href="estilos/stylesIndex.css"> 
    <script src="estilos/scriptsIndex.js" defer></script> 
</head>


<body>
    <div class="row">
        <div class="col s12 m5">
            <div>
                <h1>Login de sistema</h1>
                <form method="POST" action="logica/loguear.php">
                    <input type="text" name="no_cuenta" placeholder="Número de Cuenta" required />
                    <input type="text" name="clave" placeholder="Contraseña" required />
                    <button type="submit">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>

<footer>
<p>&copy; 2024 Sistema de Gestión de Alumnos. Todos los derechos reservados.</p>
    <div class="social-links">
        <a href="#">Facebook</a>
        <a href="#">Telegram</a>
        <a href="#">Github</a>
    </div>
</footer>

</body>
</html>