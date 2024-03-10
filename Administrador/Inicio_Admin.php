<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="../index.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
    session_start(); 
    $usuario = $_SESSION['usuario'];
    ?>
    <header>
        <div>
        <img src="..\Imagenes/Otros/logo.png" id="encabezado-logo">
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

    <div class="carrusel-noticias">

        <div class="card">
            <a href="https://www.bbc.com/mundo/noticias-63772993"><h3>Suspenso en el Grupo E</h3></a>
            <p>¿Qué necesita Costa Rica para clasificar a la segunda ronda después de ganarle 1-0 a Japón?</p>
            <img src="https://ichef.bbci.co.uk/news/800/cpsprodpb/E2D5/production/_127796085_gettyimages-1245140168.jpg.webp" alt="imagen" class="imagen-noticia">
        </div>
        <div class="card">
        <a href="https://www.lanacion.com.ar/deportes/futbol/corea-del-sur-vs-ghana-en-vivo-nid28114022/"><h3>¿El mejor partido del Mundial Qatar 2022?</h3></a>
            <p>Ghana venció a Corea del Sur en un desafío electrizante con cinco goles y emoción hasta el final</p>
            <img src="https://resizer.glanacion.com/resizer/GW9mrhArVit1unq6nVBDJD-hliw=/879x0/filters:format(webp):quality(80)/cloudfront-us-east-1.images.arcpublishing.com/lanacionar/QGVNNLSJANBFBJVYNQSMYRG24U.JPG" alt="imagen" class="imagen-noticia">
        </div>
        <div class="card">
        <a href="https://www.marca.com/futbol/mundial/cronica/2022/11/28/6384f84046163fcca28b45f4.html"><h3>A falta de Neymar, Casemiro</h3></a>
            <p>Golazo del jugador del United para tumbar a Suiza y sellar el pase de Brasil a octavos</p>
            <img src="https://phantom-marca.unidadeditorial.es/81972c11f049729f69f957695f88f5f4/resize/660/f/webp/assets/multimedia/imagenes/2022/11/28/16696585866775.jpg" alt="imagen" class="imagen-noticia">
        </div>
        <div class="card">
        <a href="https://www.eluniverso.com/deportes/futbol/portero-andre-onana-separado-de-la-seleccion-de-camerun-sus-partidos-del-mundial-2022-nota/"><h3>André Onana, separado de la selección de Camerún para el Mundial 2022</h3></a>
            <p>El arquero titular de Camerún, André Onana, fue apartado del equipo antes del partido contra Serbia en el Mundial 2022, este lunes, confirmó una fuente de la Federación Camerunesa de Fútbol (Fecafoot).</p>
            <img src="https://www.eluniverso.com/resizer/CSXBH6WPHWBSlLbcX0mWcHIj6Cc=/1192x670/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/E5FIXN3VYBCAZAS3OPUA4YT7GA.jpg" alt="imagen" class="imagen-noticia">
        </div>
        <div class="card">
        <a href="https://www.rpctv.com/qatar-2022/copa-mundial-futbol/futbol-internacional/futbol/qatar-2022-polemica-messi-patear-y-pisar-playera-mexico-n5809893"><h3>Polémica con Messi por patear y pisar playera de México</h3></a>
            <p>Usuarios en redes sociales publicaron imágenes en donde se ve a Lionel Messi con la playera de México en el suelo en el Mundial de Qatar 2022.</p>
            <img src="https://media.rpctv.com/p/ecd1ee518d4852ab59bf97a7397e01b5/adjuntos/314/imagenes/018/099/0018099408/855x0/smart/imagepng.png" alt="imagen" class="imagen-noticia">
        </div>
        
    </div>

    <div class="partidos-recientes">
        <h2 class="recientes-inicio">Partidos recientes</h2>
        <p class="tiempo-inicio">Tiempo:93 min</p>

        <div class="enfrentamiento-inicio">
            <div class="equipo-inicio">
                <img src="..\Imagenes\Continente_Equipos\America\Uruguay\Bandera Uruguay.png" alt="Uruguay" class="bandera-inicio">
                <h1>2</h1>
            </div>
            <div id="equipo-inicio-vs">
                <p>VS</p>
            </div>
            <div class="equipo-inicio">
                <img src="..\Imagenes\Continente_Equipos\Europa\Portugal\Bandera Portugal.png" alt="Portugal" class="bandera-inicio">
                <h1>3</h1>
            </div>
        </div>
        <div class="info-inicio">
            <div class="info-inicio-1">
                <div class="info-inicio-contenido">
                    <img src="..\Imagenes\Continente_Equipos\America\Uruguay\Uniforme Uruguay.png" class="Uniforme-inicio">
                    <p>Fede Valverde 3'</p>
                </div>
                <div class="info-inicio-contenido">
                    <img src="..\Imagenes\Continente_Equipos\America\Uruguay\Uniforme Uruguay.png" class="Uniforme-inicio">
                    <p>Darwin Nuñez  27'</p>
                </div>
            </div>
            <div class="info-inicio-2">
                <div class="info-inicio-contenido">
                    <p>Bruno Fernandes 11'</p>
                    <img src="..\Imagenes\Continente_Equipos\Europa\Portugal\Uniforme Portugal.png" class="Uniforme-inicio">
                    
                </div>
                <div class="info-inicio-contenido">
                    <p>Cristiano Ronaldo 60'</p>
                    <img src="..\Imagenes\Continente_Equipos\Europa\Portugal\Uniforme Portugal.png" class="Uniforme-inicio">
                </div>
                <div class="info-inicio-contenido">
                    <p>Cristiano Ronaldo (p) 92'</p>
                    <img src="..\Imagenes\Continente_Equipos\Europa\Portugal\Uniforme Portugal.png" class="Uniforme-inicio">
                </div>
            </div>
        </div> 

    </div>
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