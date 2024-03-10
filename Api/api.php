<?php
include('../Conexion.php');
$ganador= "";
$pts1 = 0;
$jj1 = 0;
$jg1 = 0;
$je1 = 0;
$jp1 = 0;
$gf1 = 0;
$gc1 = 0;
$dg1 = 0;
$pts2 =0;
$jj2 = 0;
$jg2 = 0;
$je2 = 0;
$jp2 = 0;
$gf2 = 0;
$gc2 = 0;
$dg2 = 0;
$sql_insert = "";
$sql_insert1 = "";
$sql_insert2 = "";
$sql_update = "";
$resultado_insert;
$resultado_insert1;
$resultado_insert2;
$consulta = "SELECT * FROM resultados";
$resultado = mysqli_query($conn, $consulta);
if ($resultado){
    while($row = mysqli_fetch_assoc($resultado)){
        $equipo1 = $row['equipo_1'];
        $equipo2 = $row['equipo_2'];
        $goles1 = $row['goles_1'];
        $goles2 = $row['goles_2'];
        $grupo = $row['grupo'];
        if ($goles1 > $goles2){
            $ganador = $equipo1;
            $pts1 += 3;
            $jj1 += 1;
            $jg1 += 1;
            $je1 += 0;
            $jp1 += 0;
            $gf1 += $goles1;
            $gc1 += $goles2;
            $dg1 = $gf1 - $gc1;
            $pts2 += 0;
            $jj2 += 1;
            $jg2 += 0;
            $je2 += 0;
            $jp2 += 1;
            $gf2 += $goles2;
            $gc2 += $goles1;
            $dg2 = $gc2 - $gf2;
            $sql_insert1 = "INSERT INTO tabla_posiciones (nombre, puntos, JJ, JG, JE, JP, GA, GC, DIF, grupo) VALUES ('$ganador', $pts1, $jj1, $jg1, $je1, $jp1, $gf1, $gc1, $dg1,''$grupo')";
            $sql_insert2 = "INSERT INTO tabla_posiciones (nombre, puntos, JJ, JG, JE, JP, GA, GC, DIF, grupo) VALUES ('$equipo2', $pts2, $jj2, $jg2, $je2, $jp2, $gf2, $gc2, $dg2,'$grupo')";
            $resultado_insert1 = mysqli_query($conn, $sql_insert1);
            $resultado_insert2 = mysqli_query($conn, $sql_insert2);
            if ($resultado_insert == true && $resultado_insert1 == true){
                
            }
                
            else{
                $sql_update1 = "UPDATE tabla_posiciones SET puntos = $pts1, JJ = $jj1, JG = $jg1, JE = $je1, JP = $jp1, GA = $gf1, GC = $gc1, DIF = $dg1 WHERE nombre = '$ganador'";
                $resultado_update1 = mysqli_query($conn, $sql_update1);
                $sql_update2 = "UPDATE tabla_posiciones SET puntos = $pts2, JJ = $jj2, JG = $jg2, JE = $je2, JP = $jp2, GA = $gf2, GC = $gc2, DIF = $dg2 WHERE nombre = '$ganador'";
                $resultado_update2 = mysqli_query($conn, $sql_update2);
            }
        } else if ($goles1 < $goles2){
            $ganador = $equipo2;
            $pts2 += 3;
            $jj2 += 1;
            $jg2 += 1;
            $je2 += 0;
            $jp2 += 0;
            $gf2 += $goles2;
            $gc2 += $goles1;
            $dg2 = $gf2 - $gc2;
            $pts1 += 0;
            $jj1 += 1;
            $jg1 += 0;
            $je1 += 0;
            $jp1 += 1;
            $gf1 += $goles1;
            $gc1 += $goles2;
            $dg1 = $gc1 - $gf1;
            $sql_insert1 = "INSERT INTO tabla_posiciones (nombre, puntos, JJ, JG, JE, JP, GA, GC, DIF, grupo) VALUES ('$ganador', $pts2, $jj2, $jg2, $je2, $jp2, $gf2, $gc2, $dg2,'$grupo')";
            $sql_insert2 = "INSERT INTO tabla_posiciones (nombre, puntos, JJ, JG, JE, JP, GA, GC, DIF, grupo) VALUES ('$equipo1', $pts1, $jj1, $jg1, $je1, $jp1, $gf1, $gc1, $dg1,'$grupo')";
            $resultado_insert1 = mysqli_query($conn, $sql_insert1);
            $resultado_insert2 = mysqli_query($conn, $sql_insert2);
            if ($resultado_insert1 == true && $resultado_insert2 == true){
                
            }
                
            else{
                $sql_update2 = "UPDATE tabla_posiciones SET puntos = $pts2, JJ = $jj2, JG = $jg2, JE = $je2, JP = $jp2, GA = $gf2, GC = $gc2, DIF = $dg2 WHERE nombre = '$equipo2'";
                $resultado_update2 = mysqli_query($conn, $sql_update2);
                $sql_update1 = "UPDATE tabla_posiciones SET puntos = $pts1, JJ = $jj1, JG = $jg1, JE = $je1, JP = $jp1, GA = $gf1, GC = $gc1, DIF = $dg1 WHERE nombre = '$equipo1'";
                $resultado_update1 = mysqli_query($conn, $sql_update1);
            }
            
        } else {
            $ganador = "Empate";
            $pts1 += 1;
            $pts2 += 1;
            $jj1 += 1;
            $jj2 += 1;
            $jg1 += 0;
            $jg2 += 0;
            $je1 += 1;
            $je2 += 1;
            $jp1 += 0;
            $jp2 += 0;
            $gf1 += $goles1;
            $gf2 += $goles2;
            $gc1 += $goles2;
            $gc2 += $goles1;
            $dg1 += $gc1;
            $dg2 += $gc2;
            $sql_insert1 ="INSERT INTO tabla_posiciones (nombre, puntos, JJ, JG, JE, JP, GA, GC, DIF, grupo) VALUES ('$equipo1', $pts1, $jj1, $jg1, $je1, $jp1, $gf1, $gc1, $dg1,'$grupo')";
            $sql_insert2 ="INSERT INTO tabla_posiciones (nombre, puntos, JJ, JG, JE, JP, GA, GC, DIF, grupo) VALUES ('$equipo2', $pts2, $jj2, $jg2, $je2, $jp2, $gf2, $gc2, $dg2,'$grupo')";
            $resultado_insert1 = mysqli_query($conn, $sql_insert1);
            $resultado_insert2 = mysqli_query($conn, $sql_insert2);
            if ($resultado_insert1 == true && $resultado_insert2 == true){
                
            }
            else{
                $sql_update1 = "UPDATE tabla_posiciones SET puntos = $pts1, JJ = $jj1, JG = $jg1, JE = $je1, JP = $jp1, GA = $gf1, GC = $gc1, DIF = $dg1 WHERE nombre = '$equipo1'";
                $sql_update2 = "UPDATE tabla_posiciones SET puntos = $pts2, JJ = $jj2, JG = $jg2, JE = $je2, JP = $jp2, GA = $gf2, GC = $gc2, DIF = $dg2 WHERE nombre = '$equipo2'";
            }
                
        }
    }
}
else{
    echo "Error en la consulta";
}


?>