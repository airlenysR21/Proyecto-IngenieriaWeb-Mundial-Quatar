<?php
    $servidor = "localhost";
    $basedatos = "mundialqatar";
    $user = "root";
    $password = "";
    $conn = mysqli_connect($servidor, $user, $password, $basedatos);
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
?>