<?php
include ("Conexion.php");
if(isset($_POST['inicio-sesion'])){
    $usuario = $_POST['usuario-login'];
    $password = $_POST['password-login'];
    $sql_user = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$password' AND rol = 'Usuario'";
    $sql_admin = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$password' AND rol = 'Administrador'";
    $resultado_user = mysqli_query($conn, $sql_user);
    $filas_user = mysqli_num_rows($resultado_user);
    $resultado_admin = mysqli_query($conn, $sql_admin);
    $filas_admin = mysqli_num_rows($resultado_admin);
    if($filas_user > 0){
        session_start();
        $_SESSION['usuario'] = "$usuario";
        header("location:Usuario/Inicio_Usuario.php");
        mysqli_close($conn);
    }
    else if($filas_admin > 0){
        session_start();
        $_SESSION['usuario'] = "$usuario";
        header("location:Administrador/Inicio_Admin.php");
        mysqli_close($conn);
    }
    else{
        ?>
        <h3 class="registro-error">¡Ups, tu usuario o contraseña son incorrectos!</h3>
        <?php
    } 
}
?>