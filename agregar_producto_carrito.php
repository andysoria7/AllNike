<?php
session_start();

//validamos el inicio de sesion
if(!isset($_SESSION['email'])){
    header('location:visitante-index.php?error=no_einicio_sesion');
  }
  //+++++++++++++++++++++++++++++++++++++++++++++++++++

$produ_id= $_POST['produ_id'];
$cantidad= $_POST['cantidad'];

if($_SESSION['carrito'][$produ_id]!=''){
    header('location:ver_carrito.php?error=existente');
    die();
}else{
    $_SESSION['carrito'][$produ_id]=$produ_id.':'.$cantidad;
}		
header('location:ver_carrito.php');
		
?>