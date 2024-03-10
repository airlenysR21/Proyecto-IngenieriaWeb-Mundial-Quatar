<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="index.css" rel="stylesheet" type="text/css">
</head>
<body class="body-registro">
    <div class="registro">
        <h1>Inicio de Sesión</h1>
        <form method="POST">
            <input class="campo-registro" type="text" name="usuario-login" placeholder="Usuario" required>
            <input class="campo-registro" type="password" name="password-login" placeholder="Contraseña" required>
            <input class="boton-registro" type="submit" name="inicio-sesion" value="Iniciar Sesión">
        </form>
        <p><a href="Registrar.php">¿No tienes cuenta?</a></p>
    </div>
    <?php
    include ('Login-code.php');
    ?>
</body>
</html>