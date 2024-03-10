<?php
include('../Conexion.php');

if(isset($_POST['enviar-resultados'])){
    $grupo_resultado = $_POST['grupo_resultado'];
    $equipo_1 = $_POST['equipo_1'];
    $goles_1 = $_POST['goles_1'];
    $equipo_2 = $_POST['equipo_2'];
    $goles_2 = $_POST['goles_2'];
    $estadio_resultado = $_POST['estadio_resultado'];
    $fecha = $_POST['fecha'];
    $tiempo = $_POST['tiempo'];

    $sql_resultados = "INSERT INTO resultados (grupo, equipo_1, goles_1, equipo_2, goles_2, estadio, fecha, hora) VALUES ('$grupo_resultado', '$equipo_1', '$goles_1', '$equipo_2', '$goles_2', '$estadio_resultado', '$fecha', '$tiempo')";
    $resultado = mysqli_query($conn, $sql_resultados);
    if($resultado){
        ?>
        <h3 class="resultados-exito">¡Se han ingresado los resultados correctamente!</h3>
        <?php
        include('../Api/api.php');
        mysqli_close($conn);
    }
    else{
        ?>
        <h3 class="resultados-error">¡Ups, ha ocurrido un error!</h3>
        <?php
    }




}
?>