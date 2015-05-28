<?php
session_start();
include "conexion.php";
	$fecha = $_POST['Fecha'];
	$re=mysql_query("select * from detalleventa where fecha='$fecha'")or die(mysql_error());
	while ($f=mysql_fetch_array($re)) {
		$fecha=$f['fecha'];
		$_SESSION['fechaventa']=$fecha;
	}
	if(isset($_SESSION['fechaventa'])){
		header("Location: inforeportedos.php");
		
	}else{
		header("Location: reportedos.php?error=No hay ventas para esta fecha.");
	}
?>