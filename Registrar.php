<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="index.css" rel="stylesheet" type="text/css">
</head>
<body class="body-registro">
    <div class="registro">
        <h1>Registro</h1>
        <form method="POST">
            <input class="campo-registro" type="text" name="usuario-registro" placeholder="Usuario" required>
            <input class="campo-registro" type="email" name="correo" placeholder="Correo Electrónico">
            <input class="campo-registro" type="password" name="password-registro" placeholder="Contraseña" required>
            <input class="boton-registro" type="submit" name="registrar" value="Registrar">
        </form>
        <p><a href="Login.php">¿Ya tienes cuenta?</a></p>
    </div>
    <?php
    include ('Registro_code.php');
    ?>
</body>
</html>