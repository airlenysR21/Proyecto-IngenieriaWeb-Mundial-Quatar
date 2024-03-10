<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link href="../index.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
    session_start(); 
    $usuario = $_SESSION['usuario'];
    ?>
    <header>
        <div>
        <img src="../Imagenes/Otros/logo.png" id="encabezado-logo">
        </div>
        <nav>
            <ul  class="menu">
                <li><a href="Inicio_Admin.php">Inicio</a></li>
                <li><a href="Resultados_Admin.php">Resultados</a></li>
                <li><a href="T_Posiciones_Admin.php">Posiciones</a></li>
                <li><a href="ClasificacionAdmin.php">Clasificaciones</a></li>
                <li><a>Bienvenid@ <?= $usuario?></a>                
                    <ul class="submenu">
                        <li><a href="cerrar_sesion.php?cerrar=yes">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <div class="contenedor_input_admin">
    <h1>Ingrese los resultados del partido: </h1>
        <form method="POST">
            <input class="campo-resultado-A" type="text" name="grupo_resultado" placeholder="Grupo" required>
            <input class="campo-resultado-A" type="text" name="equipo_1" placeholder="Equipo 1" required>
            <input class="campo-resultado-A" type="number" name="goles_1" placeholder="Goles de equipo 1" required>
            <input class="campo-resultado-A" type="text" name="equipo_2" placeholder="Equipo 2" required>
            <input class="campo-resultado-A" type="number" name="goles_2" placeholder="Goles de equipo 2" required>
            <input class="campo-resultado-A" type="text" name="estadio_resultado" placeholder="Estadio" required>
            <input class="campo-resultado-A" type="date" name="fecha" placeholder="Fecha" required>
            <input class="campo-resultado-A" type="time" name="tiempo" placeholder="Tiempo" required>
            

            <input class="boton-resultados-A" type="submit" name="enviar-resultados" value="Registrar resultados">
        </form>
    </div>
    <?php
    include('Resultados_Code.php');
    ?>

<footer>
        <div class="footer">
            <div class="footer-izquierda">
                <h2>Información</h2>
                <ul>
                    <li><a href="">Política de Privacidad</a></li>
                    <li><a href="">Contacto</a></li>
                    <li><a href="">Privacidad</a></li>
                </ul>
            </div>
            <div class="footer-centro">
                <h2>Redes sociales</h2>
                <ul>
                    <li><a href="https://www.facebook.com/fifaworldcup/">Facebook</a></li>
                    <li><a href="https://twitter.com/fifaworldcup_es?s=20&t=7pAMHjlye3yMIuUrXqjx6g">Twitter</a></li>
                    <li><a href="https://www.instagram.com/copamundo_2022/?hl=es">Instagram</a></li>
                </ul>
            </div>
            <div class="footer-derecha">
                <h2>Patrocinadores oficiales</h2>
                <ul>
                    <li><a href="https://www.adidas.com/us">Adidas</a></li>
                    <li><a href="https://www.cocacola.es">CocaCola</a></li>
                    <li><a href="https://www.qatarairways.com/en/homepage.html">Qatar Airways</a></li>
                </ul>
            </div>
        </div>
    </footer>
    
</body>
</html>