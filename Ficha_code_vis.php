<?php
include('Conexion.php');

if(isset($_POST['enviar-ficha'])){
    $dia = $_POST['day'];
    $mes = $_POST['month'];
    $fecha = "2022-" . $mes ."-". $dia;
    
    $sql_fecha = "SELECT * FROM resultados WHERE fecha = '$fecha'";
    $result = mysqli_query($conn, $sql_fecha);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
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
    } else {
        ?>
        <div class="ficha-cuadro">
            <h3>No hay partidos en esa fecha</h3>
        </div>
        <?php
    }
}
?>