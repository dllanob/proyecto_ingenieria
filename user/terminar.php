<?php
	session_start();
	unset($_SESSION['carrito']);
	unset($_SESSION['titular']);
	unset($_SESSION['numeroventa']);
	unset($_SESSION['nombrecliente']);
	header("Location: home-priv.php");
 ?>