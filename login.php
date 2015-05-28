<?php
session_start();
include "conexion.php";
$re=mysql_query("select * from cliente where nombre='".$_POST['NombreUsuario']."' AND 
 					contrasena='".$_POST['Password']."'")	or die(mysql_error());
	while ($f=mysql_fetch_array($re)) {
		$arreglo[]=array('Nombre'=>$f['nombre'],
			'Apellido'=>$f['apellido']);
	}
	if(isset($arreglo)){
		$_SESSION['Usuario']=$arreglo;
		$nombre = $_POST['NombreUsuario'];

		if ($nombre == 'admin') {
			header("Location: user/admin.php");
		} else {
			$_SESSION['Usuario']=$nombre;
			header("Location: user/home-priv.php");	
		}
		
	}else{
		header("Location: registro.php?error=Los datos ingresados no son validos.");
	}
?>