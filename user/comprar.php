<?php
	session_start();
	include "../conexion.php";
		$arreglo=$_SESSION['carrito'];
		$numeroventa=0;
		$re=mysql_query("select * from detalleventa order by numeroventa DESC limit 1") or die(mysql_error());	
		while (	$f=mysql_fetch_array($re)) {
					$numeroventa=$f['numeroventa'];	
		}
		if($numeroventa==0){
			$numeroventa=1;
			$_SESSION['numeroventa']=$numeroventa;
		}else{
			$numeroventa=$numeroventa+1;
			$_SESSION['numeroventa']=$numeroventa;
		}
		

		

		for($i=0; $i<count($arreglo);$i++){
			$nombre =  $arreglo[$i]['Nombre'];
			$cantidad = $arreglo[$i]['Cantidad'];
			$precio = $arreglo[$i]['Precio'];
			$subtotal = $arreglo[$i]['Cantidad']*$arreglo[$i]['Precio'];
			$cliente = $_SESSION['Usuario'];
			$_SESSION['titular']=$cliente;
			$arreglo = $_SESSION['carrito'];
			$id_producto = $arreglo[$i]['Id'];
			$fecha= date("Y-m-d");;

			mysql_query("INSERT INTO detalleventa (nombre,numeroventa, precio,cantidad,subtotal,cliente,fecha,id_venta_detalleventa,id_producto_detalleventa) VALUES('$nombre','$numeroventa','$precio','$cantidad','$subtotal','$cliente','$fecha','$numeroventa','$id_producto')")or die(mysql_error());
		}
		
		header("Location: confirmacion.php");
 ?>