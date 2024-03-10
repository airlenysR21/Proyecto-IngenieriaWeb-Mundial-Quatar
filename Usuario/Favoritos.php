<?php
include('../Conexion.php');

session_start(); 
$usuario = $_SESSION['usuario'];

$sql2 = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);
$favorito = $row2['favorito'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favoritos</title>
    <link href="../index.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <div>
        <img src="../Imagenes/Otros/logo.png" id="encabezado-logo">
        </div>
        <nav>
            <ul  class="menu">
                <li><a href="Inicio_Usuario.php">Inicio</a></li>
                <li><a href="T_Equipos_Usuario.php">Equipos</a></li>
                <li><a href="Resultados_Usuario.php">Resultados</a></li>
                <li><a href="T_Posiciones_Usuario.php">Posiciones</a></li>
                <li><a href="Clasificacion_Usuario.php">Clasificaciones</a></li>
                <li><a href="Favoritos.php">Favoritos</a></li>
                <li><a>Bienvenid@ <?= $usuario?></a>                
                    <ul class="submenu">
                        <li><a href="cerrar_sesion.php?cerrar=yes">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    
    <div class="fav-h1">
        <h1>Favoritos</h1>
    </div>

    <?php
    if($favorito == null){
        ?>
        <div class="ficha-cuadro">
            <h3>No tienes equipos favoritos</h3>
        </div>
        <?php
    }
    else{
    
    $consulta="SELECT * FROM resultados WHERE equipo_1='$favorito' OR equipo_2='$favorito'";
    $registro=mysqli_query($conn,$consulta);
    while($row=mysqli_fetch_array($registro)){
            $equipo_1 = $row['equipo_1'];
            $equipo_2 = $row['equipo_2'];
            $goles_1 = $row['goles_1'];
            $goles_2 = $row['goles_2'];
            $fecha = $row['fecha'];
            $hora = $row['hora'];
            $estadio = $row['estadio'];
            $grupo = $row['grupo'];
    
    ?>
    <div class="ficha-cuadro">
            <div class="ficha-grid">
                <div class="ficha-grupo">
                    <h1><?php echo "Grupo: $grupo" ?></h1>
                </div>
                <div class="ficha-estadio">
                    <h1><?php echo "Estadio: $estadio" ?></h1>
                </div>
                <div class="ficha-fecha">
                    <h1><?php echo $fecha ?></h1>
                </div>  
                <div class="ficha-hora">
                    <h1><?php echo $hora ?></h1>
                </div>
            </div>
            <div class="ficha-grid">
                <div class="ficha-equipo-1">
                <h1><?php echo $equipo_1 ?></h1>
                </div>
                <div class="ficha-goles">
                <h1><?php echo $goles_1 ?></h1>
                </div>
                <div class="ficha-goles">
                <h1><?php echo $goles_2 ?></h1>
                </div>
                <div class="ficha-equipo-2">
                <h1><?php echo $equipo_2 ?></h1>
                </div>
            </div>
        </div>
    <?php
    }
    }
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