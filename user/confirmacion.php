<?php
	session_start();
	if (isset($_SESSION['Usuario'])) {
		
	} else {
		header("Location: ../registro.php");
	}
	include 'conexion.php'; 
 ?>

<!DOCTYPE HTML>
<html>
<head>
<title> Carrito de compras</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="../web/images/cart.ico" type="image/x-ic"/>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link href="../web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../fonts/style.css">
<script src="../web/js/jquery.min.js"></script>
<script src="../js/scripts.js"></script>
<!-- start top_js_button -->
<script type="text/javascript" src="../web/js/move-top.js"></script>
<script type="text/javascript" src="../web/js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="home-priv.php"><p class="logo">TotalMakeOver</p></a>
		</div>
		
		<a href="cerrar.php"><span class="icon-usuario icon-exit"></span></a>
		<a href="carrito.php" class="carrito-logo"><img src="../web/images/cart.png" alt=""></a>
		<div class="h_search">
    		<form>
    			<input type="text" value="">
    			<input type="submit" value="">
    		</form>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<div class="header_btm">
<div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
			<ul>
				<li><a href="home-priv.php">Inicio</a></li> |
				<li><a href="handbags.html">Bolsos</a></li> |
				<li><a href="destacados.php">Productos destacados</a></li> |
				<li><a href="shoes.html">Zapatos</a></li> |
				<li><a href="service.html">Servicios</a></li> |
				<li><a href="contact.html">Contacto</a></li>
			</ul>
		</div>
		<div class="top-nav">
	          <nav class="nav">	        	
	    	    <a href="#" id="w3-menu-trigger"> </a>
	                  <ul class="nav-list" style="">
	            	        <li class="nav-item"><a class="active" href="home-priv.php">Inicio</a></li>
							<li class="nav-item"><a href="handbags.html">Bolsos</a></li>
							<li class="nav-item"><a href="destacados.php">Productos destacados</a></li>
							<li class="nav-item"><a href="shoes.html">Zapatos</a></li>
							<li class="nav-item"><a href="service.html">Servicios</a></li>
							<li class="nav-item"><a href="contact.html">Contacto</a></li>
	                 </ul>
	           </nav>
	             <div class="search_box">
				<form>
				   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    </form>
			</div>
	          <div class="clear"> </div>
	          <script src="../web/js/responsive.menu.js"></script>
         </div>	
	<div class="clear"></div>
</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<h2 class="style top"><span class="icon icon-titulo icon-list"></span>Información de orden</h2>
		<section class="carrito-cont">
			 
			
           <?php 
           echo "          
            
			<section class='forma-pago' style='background: #DCDCDC; border-radius: 7px; margin: 20px 0; padding: 10px 20px; box-sizing:border-box; text-align: center;'>
			 	<h2 style='font-size:35px; color: #393939;'>orden</h2>
			 	<p style='color: #4CCFC1; font-size:20px;'>NV000".$_SESSION['numeroventa']."</p>
			 </section>

			 <section class'forma-pago' style='background: #DCDCDC; border-radius: 7px; margin: 20px 0; padding: 10px 20px; box-sizing:border-box; text-align: center;'>
			 	<h2 style='font-size:35px; color: #393939;'>forma de pago</h2>
			 	<p style='color: #4CCFC1; font-size:20px;'>Pago contra entrega</p>
			 </section>

			 <section class='forma-pago' style='background: #DCDCDC; border-radius: 7px; margin: 20px 0; padding: 10px 20px; box-sizing:border-box; text-align: center;'>
			 	<h2 style='font-size:35px; color: #393939;'>titular de la compra</h2>
			 	<p style='color: #4CCFC1; font-size:20px;'>".$_SESSION['titular']."</p>
			 </section>";?>
		
			<article class="product-cont">
				<section class="titulos-cont" style="background: #ADACAC;">
					<p class="titulo producto" >Producto</p>
					<p class="titulo cantidad">Cantidad</p>
					<p class="titulo subtotal">Subtotal</p>
				</section><br>
		
		<?php
			$total=0;
			if(isset($_SESSION['carrito'])){
				$datos=$_SESSION['carrito'];
				for ($i=0; $i < count($datos); $i++) {
		?>
				<ul>
					<li>
						<div class="producto nombre">
							<?php echo $datos[$i]['Nombre'];?>
						</div>
						<div class="producto cantidad">
							<p><?php echo $datos[$i]['Cantidad'];?></p>
						</div>
						<div class="producto precio subtotal">$<?php echo $datos[$i]['Precio']*$datos[$i]['Cantidad'];?></div>
					</li>
				</ul>

		<?php
					$total = ($datos[$i]['Precio']*$datos[$i]['Cantidad'])+$total;
				}
		
			} else {
				echo '
				<section class="carrito-empty">
					<span class="icon icon-list"></span>
					<h1>No hay lista de compras</h1>
					<p>Click <a href="home-priv.php">aquí</a> para retornar al catalogo.</p>
				</section><br>';
			}

			echo "<section class='total-cont' style='background: #ADACAC;'>
					<div class='items' >
						<p class='total-item  total1'>Total</p>
						<p class='total-item  total2'  id='total'>$".$total."</p>
					</div>	
				</section>";
		 ?>
		 		<section class='button-cont' action='terminar.php'>
					<a href='terminar.php' class='boton' width='200' height='80'>TERMINAR</a>
				</section>
		 	</article>

		 </section>

		
	</div>
</div>
</div>		

<!-- start footer -->
<br><div class="footer_bg1">
<div class="wrap">
	<div class="footer">
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
		<div class="copy">
			<p class="link">&copy;  Proyecto Ingenieria de Software II - 2015</p>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</body>
</html>