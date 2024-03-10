<?php
include ("../Conexion.php");

//Recupera de que enlace viene
if(isset($_GET['Qatar'])) {
    $pais="Qatar";
}
elseif(isset($_GET['Ecuador'])) {
    $pais="Ecuador";
}
elseif(isset($_GET['Senegal'])) {
    $pais="Senegal";
}
elseif(isset($_GET['PaísesBajos'])) {
    $pais="Países Bajos";
}
elseif(isset($_GET['Inglaterra'])) {
    $pais="Inglaterra";
}
elseif(isset($_GET['IRIrán'])) {
    $pais="IR Irán";
}
elseif(isset($_GET['EstadosUnidos'])) {
    $pais="Estados Unidos";
}
elseif(isset($_GET['Gales'])) {
    $pais="Gales";
}
elseif(isset($_GET['Argentina'])) {
    $pais="Argentina";
}
elseif(isset($_GET['SaudiArabia'])) {
    $pais="Saudi Arabia";
}
elseif(isset($_GET['México'])) {
    $pais="México";
}
elseif(isset($_GET['Polonia'])) {
    $pais="Polonia";
}
elseif(isset($_GET['Francia'])) {
    $pais="Francia";
}
elseif(isset($_GET['Australia'])) {
    $pais="Australia";
}
elseif(isset($_GET['Dinamarca'])) {
    $pais="Dinamarca";
}
elseif(isset($_GET['Túnez'])) {
    $pais="Túnez";
}
elseif(isset($_GET['España'])) {
    $pais="España";
}
elseif(isset($_GET['CostaRica'])) {
    $pais="Costa Rica";
}
elseif(isset($_GET['Alemania'])) {
    $pais="Alemania";
}
elseif(isset($_GET['Japón'])) {
    $pais="Japón";
}
elseif(isset($_GET['Bélgica'])) {
    $pais="Bélgica";
}
elseif(isset($_GET['Canadá'])) {
    $pais="Canadá";
}
elseif(isset($_GET['Marruecos'])) {
    $pais="Marruecos";
}
elseif(isset($_GET['Croacia'])) {
    $pais="Croacia";
}
elseif(isset($_GET['Brasil'])) {
    $pais="Brasil";
}
elseif(isset($_GET['Serbia'])) {
    $pais="Serbia";
}
elseif(isset($_GET['Suiza'])) {
    $pais="Suiza";
}
elseif(isset($_GET['Camerún'])) {
    $pais="Camerún";
}
elseif(isset($_GET['Portugal'])) {
    $pais="Portugal";
}
elseif(isset($_GET['Ghana'])) {
    $pais="Ghana";
}
elseif(isset($_GET['Uruguay'])) {
    $pais="Uruguay";
}
elseif(isset($_GET['CoreadelSur'])) {
    $pais="Corea del Sur";
}


//recupera el codigo del equipo
$sql = "SELECT * FROM equipos WHERE pais = '$pais'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$cod_equipo = $row['cod_equipo'];
$logro = $row['logro'];


//Guarda la imagen del uniforme en una variable dependiendo del equipo
if($pais == "Qatar") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Asia\QATAR\Uniforme Qatar.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Asia\QATAR\Bandera Qatar.png";
}
elseif($pais == "Ecuador") {
    $imguniforme = "..\Imagenes\Continente_Equipos\America\Ecuador\Uniforme Ecuador.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\America\Ecuador\Bandera Ecuador.png";
}
elseif($pais == "Senegal") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Africa\Senegal\Uniforme Senegal.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Africa\Senegal\Bandera Senegal.png";
}
elseif($pais == "Países Bajos") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Europa\Países Bajos\Uniforme Países Bajos.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Europa\Países Bajos\Bandera Países Bajos.png";
}
elseif($pais == "Inglaterra") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Europa\Inglaterra\Uniforme Inglaterra.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Europa\Inglaterra\Bandera Inglaterra.png";
}
elseif($pais == "IR Irán") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Asia\Irán\Uniforme Irán.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Asia\Irán\Bandera Irán.png";
}
elseif($pais == "IR Irán") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Asia\Irán\Uniforme Irán.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Asia\Irán\Bandera Irán.png";
}
elseif($pais == "Estados Unidos") {
    $imguniforme = "..\Imagenes\Continente_Equipos\America\Estados Unidos\Uniforme Estados Unidos.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\America\Estados Unidos\Bandera Estados Unidos.png";
}
elseif($pais == "Gales") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Europa\Gales\Uniforme Gales.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Europa\Gales\Bandera Gales.png";
}
elseif($pais == "Argentina") {
    $imguniforme = "..\Imagenes\Continente_Equipos\America\Argentina\Uniforme Argentina.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\America\Argentina\Bandera Argentina.png";
}
elseif($pais == "Saudi Arabia") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Asia\Arabia Saudita\Uniforme Arabia Saudita.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Asia\Arabia Saudita\Bandera Arabia Saudita.png";
}
elseif($pais == "México") {
    $imguniforme = "..\Imagenes\Continente_Equipos\America\México\Uniforme México.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\America\México\Bandera México.png";
}
elseif($pais == "Polonia") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Europa\Polonia\Uniforme Polonia.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Europa\Polonia\Bandera Polonia.png";
}
elseif($pais == "Francia") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Europa\Francia\Uniforme Francia.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Europa\Francia\Bandera Francia.png";
}
elseif($pais == "Australia") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Oceania\Australia\Uniforme Australia.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Oceania\Australia\Bandera Australia.png";
}
elseif($pais == "Dinamarca") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Europa\Dinamarca\Uniforme Dinamarca.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Europa\Dinamarca\Bandera Dinamarca.png";
}
elseif($pais == "Túnez") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Africa\Túnez\Uniforme Túnez.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Africa\Túnez\Bandera Túnez.png";
}
elseif($pais == "España") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Europa\España\Uniforme España.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Europa\España\Bandera España.png";
}
elseif($pais == "Costa Rica") {
    $imguniforme = "..\Imagenes\Continente_Equipos\America\Costa Rica\Uniforme Costa Rica.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\America\Costa Rica\Bandera Costa Rica.png";
}
elseif($pais == "Alemania") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Europa\Alemania\Uniforme Alemania.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Europa\Alemania\Bandera Alemania.png";
}
elseif($pais == "Japón") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Asia\Japón\Uniforme Japón.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Asia\Japón\Bandera Japón.png";
}
elseif($pais == "Bélgica") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Europa\Bélgica\Uniforme Bélgica.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Europa\Bélgica\Bandera Bélgica.png";
}
elseif($pais == "Canadá") {
    $imguniforme = "..\Imagenes\Continente_Equipos\America\Canadá\Uniforme Canadá.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\America\Canadá\Bandera Canadá.png";
}
elseif($pais == "Marruecos") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Africa\Marruecos\Uniforme Marruecos.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Africa\Marruecos\Bandera Marruecos.png";
}
elseif($pais == "Croacia") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Europa\Croacia\Uniforme Croacia.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Europa\Croacia\Bandera Croacia.png";
}
elseif($pais == "Brasil") {
    $imguniforme = "..\Imagenes\Continente_Equipos\America\Brazil\Uniforme Brazil.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\America\Brazil\Bandera Brazil.png";
}
elseif($pais == "Serbia") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Europa\Serbia\Uniforme Serbia.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Europa\Serbia\Bandera Serbia.png";
}
elseif($pais == "Suiza") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Europa\Suiza\Uniforme Suiza.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Europa\Suiza\Bandera Suiza.png";
}
elseif($pais == "Camerún") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Africa\Camerún\Uniforme Camerún.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Africa\Camerún\Bandera Camerún.png";
}
elseif($pais == "Portugal") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Europa\Portugal\Uniforme Portugal.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Europa\Portugal\Bandera Portugal.png";
}
elseif($pais == "Ghana") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Africa\Ghana\Uniforme Ghana.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Africa\Ghana\Bandera Ghana.png";
}
elseif($pais == "Uruguay") {
    $imguniforme = "..\Imagenes\Continente_Equipos\America\Uruguay\Uniforme Uruguay.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\America\Uruguay\Bandera Uruguay.png";
}
elseif($pais == "Corea del Sur") {
    $imguniforme = "..\Imagenes\Continente_Equipos\Asia\Corea del Sur\Uniforme Corea del Sur.png";
    $imgbandera = "..\Imagenes\Continente_Equipos\Asia\Corea del Sur\Bandera Corea del Sur.png";
}

//Array para guardar los nombres de los jugadores
$Nombre=array();
//Array para guardar los apellidos de los jugadores
$Apellido=array();
//Variable de incremento
$i=0;

//recuperar los datos de la tabla jugadores de la base de datos
$consulta="SELECT * FROM jugadores WHERE cod_equipo='$cod_equipo'";
$registro=mysqli_query($conn,$consulta);
while($reg=mysqli_fetch_array($registro)){
    $Nombre[$i]=$reg['nombre'];
    $Apellido[$i]=$reg['apellido'];
    $i++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo</title>
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

    <div class="barra-pais-usuario">
        <div>
            <img src="<?php echo $imgbandera?>">
        </div>
        <div>
            <h1><?php echo $pais ?></h1>
        </div>
        <div class="boton-favorito-usuario">
        <?php
            //mira en la base de datos si tiene un favorito, y si lo tiene manda una u otra forma del boton de favorito
            $sql2 = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($result2);
            $favorito = $row2['favorito'];

            if($favorito == $pais){
                echo "<a href='Quitar_Favorito.php?pais=".$pais."'><img src='../Imagenes/Otros/Estrella_C.png' id='estrella'></a>";
            }
            else{
                echo "<a href='Agregar_Favorito.php?pais=".$pais."'><img src='../Imagenes/Otros/Estrella_S.png' id='estrella'></a>";
            }
        ?>
        </div>    
    </div>

    <div class="logros-barra">
        <div>
            <h1>Logros</h1>
            <p><?php echo $logro; ?></p>
            <br>
        </div>
    </div>

    <div class="cont-jugadores-equipo">
        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[0] ." ". $Apellido[0]?></p>
            </div>
        </div>

        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[1] ." ". $Apellido[1]?> </p>
            </div>
        </div>

        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[2] ." ". $Apellido[2]?></p>
            </div>
        </div>

        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[3] ." ". $Apellido[3]?></p>
            </div>
        </div>

        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[4] ." ". $Apellido[4]?></p>
            </div>
        </div>

        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[5] ." ". $Apellido[5]?></p>
            </div>
        </div>

        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[6] ." ". $Apellido[6]?></p>
            </div>
        </div>

        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[7] ." ". $Apellido[7]?></p>
            </div>
        </div>
    
        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[8] ." ". $Apellido[8]?></p>
            </div>
        </div>

        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[9] ." ". $Apellido[9]?></p>
            </div>
        </div>

        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[10] ." ". $Apellido[10]?></p>
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