<?php
//Conecta a la base de datos
include ("../Conexion.php");

//mira qué pais se trajo
if(isset($_GET['pais'])) {
    $pais=$_GET['pais'];
}

//Inicia la sesion
session_start(); 
$usuario = $_SESSION['usuario'];
echo $usuario;
echo $pais;

//Actualizamos el registro en la base de datos
$sql = "UPDATE usuarios SET favorito='$pais' WHERE usuario = '$usuario'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }

//Controla los paises que tengan espacio
if($pais == "Países Bajos") {
    $pais = "PaísesBajos";
}
elseif($pais == "IR Irán") {
    $pais = "IRIrán";
}
elseif($pais == "Estados Unidos") {
    $pais = "EstadosUnidos";
}
elseif($pais == "Saudi Arabia") {
    $pais = "SaudiArabia";
}
elseif($pais == "Costa Rica") {
    $pais = "CostaRica";
}
elseif($pais == "Corea del Sur") {
    $pais = "CoreadelSur";
}

header('Location: Equipo_Usuario.php?'.$pais.'=yes');	
?>