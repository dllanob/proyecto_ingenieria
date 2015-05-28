<?php
	error_reporting(0);
	$conexion = mysql_connect("localhost","root","") or die ("No se ha podido conectar con la base de datos.");
	$sdb = mysql_select_db("proyectotienda2",$conexion) or die ("La base de datos no existe."); 
?>