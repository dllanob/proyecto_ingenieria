<?php 
	session_start();
	unset($_SESSION['Usuario']);
	unset($_SESSION['nombrecliente']);
	header("Location: ../home.php");
 ?>