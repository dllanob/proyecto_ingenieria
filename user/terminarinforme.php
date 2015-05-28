<?php
	session_start();
	unset($_SESSION['nombrecliente']);
	unset($_SESSION['fechaventa']);
	header("Location: admin.php");
 ?>