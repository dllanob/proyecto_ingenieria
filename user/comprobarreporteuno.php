<?php
session_start();
include "conexion.php";
	$documento = $_POST['Documento'];
	$re=mysql_query("select * from cliente where numerodocumento='$documento'")or die(mysql_error());
	while ($f=mysql_fetch_array($re)) {
		$nombrecliente=$f['nombre'];
		$_SESSION['nombrecliente']=$nombrecliente;
	}
	if(isset($_SESSION['nombrecliente'])){
		header("Location: inforeporteuno.php");
		
	}else{
		header("Location: reporteuno.php?error=Los datos ingresados no son validos.");
	}
?>