<?php
session_start();

$email= $_POST['email'];
$clave= $_POST['clave'];

include('conexion/conecta.inc.php');
$sql='select * from usuarios where usu_email="'.$email.'"';
$result=mysqli_query($link,$sql);
if(mysqli_num_rows($result)>0){
	
	//si existe usuario. validar contraseña
	$fila=mysqli_fetch_array($result);

	if($fila['usu_aprobado']==0){
		header('location:visitante-index.php?error=usuario_sin_aprobar');
		die();
	}

	if($fila['usu_password']==md5($clave)){
		//passs correcta
		$_SESSION['email']=$fila['usu_email'];
		$_SESSION['password']=$fila['usu_password'];  
		$_SESSION['apellido']=$fila['usu_apellido'];
		$_SESSION['nombre']=$fila['usu_nombre'];
		//ver que tipo de usuario es
		if($fila['usu_tipo_usuario']==1){
			$_SESSION['usu_tipo']='1';
			header('location:admin-index.php?ok=bienvenido');
		}else{
			$_SESSION['usu_tipo']='2';
			header('location:visitante-index.php?ok=bienvenido');
		}

		
	}else{
		header('location:visitante-index.php?error=no_era_el_pass');
	}

}else{
	header('location:visitante-index.php?error=no_era_el_usuario');
}
?>