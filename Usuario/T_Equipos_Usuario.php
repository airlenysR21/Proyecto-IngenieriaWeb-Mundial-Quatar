<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Equipo</title>
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
    
    <div>
        <div class="t_equipos"> 
            <h1>Equipos</h1>
        </div>
        <div class="Continente"> 
            <div class="Continente-mapa"> 
                <h2>Africa</h2>
                <img src="../Imagenes/Continentes/Africa.png">
            </div>
            <div class="Continente-Banderas"> 
                <div id="Bandera"> <a href="equipo_usuario.php?Camerún=yes">
                    <img src="../Imagenes/Continente_Equipos/Africa/Camerún/Bandera Camerún.png">
                    <p>Camerún</p></a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Ghana=yes">
                    <img src="../Imagenes/Continente_Equipos/Africa/Ghana/Bandera Ghana.png">
                    <p>Ghana</p></a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Marruecos=yes">
                    <img src="../Imagenes/Continente_Equipos/Africa/Marruecos/Bandera Marruecos.png">
                    <p>Marruecos</p></a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Senegal=yes">
                    <img src="../Imagenes/Continente_Equipos/Africa/Senegal/Bandera Senegal.png">
                    <p>Senegal</p> </a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Túnez=yes">
                    <img src="../Imagenes/Continente_Equipos/Africa/Túnez/Bandera Túnez.png">
                    <p>Túnez</p> </a>
                </div>
            </div>
        </div>
        <hr style="color: black; background-color: black; width:75%;" /> 
        <div class="Continente"> 
            <div class="Continente-mapa"> 
                <h2>América</h2>
                <img src="../Imagenes/Continentes/América.png">
            </div>
            <div class="Continente-Banderas"> 
                <div id="Bandera"> <a href="equipo_usuario.php?Argentina=yes">
                    <img src="../Imagenes/Continente_Equipos/America/Argentina/Bandera Argentina.png">
                    <p>Argentina</p></a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Brasil=yes">
                    <img src="../Imagenes/Continente_Equipos/America/Brazil/Bandera Brazil.png">
                    <p>Brasil</p></a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Canadá=yes">
                    <img src="../Imagenes/Continente_Equipos/America/Canadá/Bandera Canadá.png">
                    <p>Canadá</p></a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?CostaRica=yes">
                    <img src="../Imagenes/Continente_Equipos/America/Costa Rica/Bandera Costa Rica.png">
                    <p>Costa Rica</p> </a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Ecuador=yes">
                    <img src="../Imagenes/Continente_Equipos/America/Ecuador/Bandera Ecuador.png">
                    <p>Ecuador</p> </a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?EstadosUnidos=yes">
                    <img src="../Imagenes/Continente_Equipos/America/Estados Unidos/Bandera Estados Unidos.png">
                    <p>Estados Unidos</p> </a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?México=yes">
                    <img src="../Imagenes/Continente_Equipos/America/México/Bandera México.png">
                    <p>México</p> </a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Uruguay=yes">
                    <img src="../Imagenes/Continente_Equipos/America/Uruguay/Bandera Uruguay.png">
                    <p>Uruguay</p> </a>
                </div>
            </div>
        </div>
        <hr style="color: black; background-color: black; width:75%;" /> 
        <div class="Continente"> 
            <div class="Continente-mapa"> 
                <h2>Asia</h2>
                <img src="../Imagenes/Continentes/Asia.png">
            </div>
            <div class="Continente-Banderas"> 
                <div id="Bandera"> <a href="equipo_usuario.php?SaudiArabia=yes">
                    <img src="../Imagenes/Continente_Equipos/Asia/Arabia Saudita/Bandera Arabia Saudita.png">
                    <p>Arabia Saudita</p></a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?CoreadelSur=yes">
                    <img src="../Imagenes/Continente_Equipos/Asia/Corea del Sur/Bandera Corea del Sur.png">
                    <p>Corea del Sur</p></a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?IRIrán=yes">
                    <img src="../Imagenes/Continente_Equipos/Asia/Irán/Bandera Irán.png">
                    <p>Irán</p></a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Japón=yes">
                    <img src="../Imagenes/Continente_Equipos/Asia/Japón/Bandera Japón.png">
                    <p>Japón</p> </a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Qatar=yes">
                    <img src="../Imagenes/Continente_Equipos/Asia/Qatar/Bandera Qatar.png">
                    <p>Qatar</p> </a>
                </div>
            </div>
        </div>
        <hr style="color: black; background-color: black; width:75%;" /> 
        <div class="Continente"> 
            <div class="Continente-mapa"> 
                <h2>Europa</h2>
                <img src="../Imagenes/Continentes/Europa.png">
            </div>
            <div class="Continente-Banderas"> 
                <div id="Bandera"> <a href="equipo_usuario.php?Alemania=yes">
                    <img src="../Imagenes/Continente_Equipos/Europa/Alemania/Bandera Alemania.png">
                    <p>Alemania</p></a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Bélgica=yes">
                    <img src="../Imagenes/Continente_Equipos/Europa/Bélgica/Bandera Bélgica.png">
                    <p>Bélgica</p></a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Croacia=yes">
                    <img src="../Imagenes/Continente_Equipos/Europa/Croacia/Bandera Croacia.png">
                    <p>Croacia</p></a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Dinamarca=yes">
                    <img src="../Imagenes/Continente_Equipos/Europa/Dinamarca/Bandera Dinamarca.png">
                    <p>Dinamarca</p> </a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?España=yes">
                    <img src="../Imagenes/Continente_Equipos/Europa/España/Bandera España.png">
                    <p>España</p> </a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Francia=yes">
                    <img src="../Imagenes/Continente_Equipos/Europa/Francia/Bandera Francia.png">
                    <p>Francia</p> </a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Gales=yes">
                    <img src="../Imagenes/Continente_Equipos/Europa/Gales/Bandera Gales.png">
                    <p>Gales</p> </a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Inglaterra=yes">
                    <img src="../Imagenes/Continente_Equipos/Europa/Inglaterra/Bandera Inglaterra.png">
                    <p>Inglaterra</p> </a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?PaísesBajos=yes">
                    <img src="../Imagenes/Continente_Equipos/Europa/Países Bajos/Bandera Países Bajos.png">
                    <p>Países Bajos</p> </a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Polonia=yes">
                    <img src="../Imagenes/Continente_Equipos/Europa/Polonia/Bandera Polonia.png">
                    <p>Polonia</p> </a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Portugal=yes">
                    <img src="../Imagenes/Continente_Equipos/Europa/Portugal/Bandera Portugal.png">
                    <p>Portugal</p> </a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Serbia=yes">
                    <img src="../Imagenes/Continente_Equipos/Europa/Serbia/Bandera Serbia.png">
                    <p>Serbia</p> </a>
                </div>
                <div id="Bandera"> <a href="equipo_usuario.php?Suiza=yes">
                    <img src="../Imagenes/Continente_Equipos/Europa/Suiza/Bandera Suiza.png">
                    <p>Suiza</p></a>
                </div>
            </div>
        </div>
        <hr style="color: black; background-color: black; width:75%;" />
        <div class="Continente"> 
            <div class="Continente-mapa"> 
                <h2>Oceania</h2>
                <img src="../Imagenes/Continentes/Oceania.png">
            </div>
            <div class="Continente-Banderas"> 
                <div id="Bandera"> <a href="equipo_usuario.php?Australia=yes">
                    <img src="../Imagenes/Continente_Equipos/Oceania/Australia/Bandera Australia.png">
                    <p>Australia</p></a>
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