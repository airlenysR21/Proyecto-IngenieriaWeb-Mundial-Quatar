<?php

if(isset($_GET['cerrar'])) {

  $_SESSION['usuario'] = NULL;
  unset($_SESSION['usuario']);
  
  header('Location:../Inicio.php');
}

?>