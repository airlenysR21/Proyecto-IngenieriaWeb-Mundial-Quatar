<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificacion</title>
    <link href="../index.css" rel="stylesheet" type="text/css">
</head>
<body class="body-clas">
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

    <div class="contenedor-principal">
        <div class="Ronda16-Izquierda" id="Iarriba">
            <rect id="Linea-iqz"></rect>

            <div class="contenedor" id="posicion1">
                <table class="tabla">
                    <tr>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                        <td id="entrada">0</td>

                        <td style="font-size:145%;">VS</td>

                        <td id="entrada">0</td>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                    </tr>
                </table>
                <p>Info</p>
            </div>
        
            <div class="contenedor" id="Iposicion2">
                <table class="tabla">
                    <tr>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                        <td id="entrada">0</td>

                        <td style="font-size:145%;">VS</td>

                        <td id="entrada">0</td>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                    </tr>
                </table>
                <p>Info</p>
            </div>

            <div class="contenedor" id="posicion3">
                <table class="tabla">
                    <tr>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                        <td id="entrada">0</td>

                        <td style="font-size:145%;">VS</td>

                        <td id="entrada">0</td>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                    </tr>
                </table>
                <p>Info</p>
            </div>
        </div>
        
        <div class="Ronda16-Izquierda" id="Iabajo">
            <rect id="Linea-iqz"></rect>

            <div class="contenedor" id="posicion1">
                <table class="tabla">
                    <tr>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                        <td id="entrada">0</td>

                        <td style="font-size:145%;">VS</td>

                        <td id="entrada">0</td>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                    </tr>
                </table>
                <p>Info</p>
            </div>

            <div class="contenedor" id="Iposicion2">
                <table class="tabla">
                    <tr>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                        <td id="entrada">0</td>

                        <td style="font-size:145%;">VS</td>

                        <td id="entrada">0</td>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                    </tr>
                </table>
                <p>Info</p>
            </div>

            <div class="contenedor" id="posicion3">
                <table class="tabla">
                    <tr>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                        <td id="entrada">0</td>

                        <td style="font-size:145%;">VS</td>

                        <td id="entrada">0</td>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                    </tr>
                </table>
                <p>Info</p>
            </div>
        </div>
        

        <rect id="Linea-der-centro"></rect>
        <rect id="Linea-izq-centro"></rect>
        <rect id="Linea-1"></rect>
        <rect id="Linea-2"></rect>

        <div class="contenedor" id="Cposicion1">
            <h1>Final</h1>
            <table class="tabla">
                <tr>

                    <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                    <td id="entrada">0</td>

                    <td style="font-size:145%;">VS</td>

                    <td id="entrada">0</td>

                    <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                </tr>
            </table>
            <p>Info</p>
        </div> 

        <div class="contenedor" id="Cposicion2">
            <table class="tabla">
                <tr>

                    <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                    <td id="entrada">0</td>

                    <td style="font-size:145%;">VS</td>

                    <td id="entrada">0</td>

                    <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                </tr>
            </table>
            <p>Info</p>
        </div>
            
        <div class="contenedor" id="Cposicion3">
            <table class="tabla">
                <tr>

                    <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                    <td id="entrada">0</td>

                    <td style="font-size:145%;">VS</td>

                    <td id="entrada">0</td>

                    <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                </tr>
            </table>
            <p>Info</p>
        </div>

        <div class="contenedor" id="Cposicion4">
            <table class="tabla">
                <tr>

                    <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                    <td id="entrada">0</td>

                    <td style="font-size:145%;">VS</td>

                    <td id="entrada">0</td>

                    <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                </tr>
            </table>
            <p>Info</p>
        </div>


        <div class="Ronda16-Derecha" id="Darriba">
            <rect id="Linea-der"></rect>
            <div class="contenedor" id="posicion1">
                <table class="tabla">
                    <tr>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                        <td id="entrada">0</td>

                        <td style="font-size:145%;">VS</td>

                        <td id="entrada">0</td>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                    </tr>
                </table>
                <p>Info</p>
            </div>

            <div class="contenedor" id="Dposicion2">
                <table class="tabla">
                    <tr>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                        <td id="entrada">0</td>

                        <td style="font-size:145%;">VS</td>

                        <td id="entrada">0</td>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                    </tr>
                </table>
                <p>Info</p>
            </div>

            <div class="contenedor" id="posicion3">
                <table class="tabla">
                    <tr>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                        <td id="entrada">0</td>

                        <td style="font-size:145%;">VS</td>

                        <td id="entrada">0</td>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                    </tr>
                </table>
                <p>Info</p>
            </div>
        </div>
        
        <div class="Ronda16-Derecha" id="Dabajo">
            <rect id="Linea-der"></rect>
            <div class="contenedor" id="posicion1">
                <table class="tabla">
                    <tr>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                        <td id="entrada">0</td>

                        <td style="font-size:145%;">VS</td>

                        <td id="entrada">0</td>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                    </tr>
                </table>
                <p>Info</p>
            </div> 
            
            <div class="contenedor" id="Dposicion2">
                <table class="tabla">
                    <tr>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                        <td id="entrada">0</td>

                        <td style="font-size:145%;">VS</td>

                        <td id="entrada">0</td>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                    </tr>
                </table>
                <p>Info</p>
            </div>

            <div class="contenedor" id="posicion3">
                <table class="tabla">
                    <tr>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                        <td id="entrada">0</td>

                        <td style="font-size:145%;">VS</td>

                        <td id="entrada">0</td>

                        <td><img src="../Imagenes/Otros/Bandera-default.png"></td>

                    </tr>
                </table>
                <p>Info</p>
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