<?php 
	session_start();

	if (isset($_SESSION['Usuario'])) {
		
	} else {
		header("Location: ../registro.php");
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Administrador</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="../web/images/cart.ico" type="image/x-ic"/>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link href="../web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../fonts/style.css">
<script src="../web/js/jquery.min.js"></script> 
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
			<a href="admin.php"><p class="logo">TotalMakeOver</p></a>
		</div>
		
		<a href="cerrar.php"><span class="icon-usuario icon-exit"></span></a>
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
				<li><a href="reporteuno.php">Ventas por cliente</a></li> |
				<li><a href="reportedos.php">Ventas por fecha</a></li>
			</ul>
		</div>
		<div class="top-nav">
	          <nav class="nav">	        	
	    	    <a href="#" id="w3-menu-trigger"> </a>
	                  <ul class="nav-list" style="">
	            	        <li class="nav-item"><a class="active" href="admin.php">Inicio</a></li>
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
		
		<section class="sesion-cont" style="font-size: 30px; color: #5C5C5C;">
			<h1 style="margin-top:100px;"><i class="icon-cog"></i> Éste es el administrador.</h1>
		</section>	
	</div>
</div>
</div>		

<!-- start footer -->
<div class="footer_bg1">
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