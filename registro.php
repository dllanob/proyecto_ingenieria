<!DOCTYPE HTML>
<html>
<head>
<title> Registro</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="web/images/cart.ico" type="image/x-ic"/>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="fonts/style.css">
<script src="web/js/jquery.min.js"></script> 
<!-- start top_js_button -->
<script type="text/javascript" src="web/js/move-top.js"></script>
<script type="text/javascript" src="web/js/easing.js"></script>
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
			<a href="home.php"><p class="logo">TotalMakeOver</p></a>
		</div>
		
		<a href="registro.php"><span class="icon-usuario icon-user"></span></a>
		<a href="carrito.php" class="carrito-logo"><img src="web/images/cart.png" alt=""></a>
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
				<li><a href="home.php">Inicio</a></li> |
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
	            	        <li class="nav-item"><a class="active" href="home.php">Inicio</a></li>
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
	          <script src="web/js/responsive.menu.js"></script>
         </div>	
	<div class="clear"></div>
</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<h2 class="style top"><span class="icon icon-titulo icon-users"></span>  Inicie sesión o registrece </h2>
		<section class="sesion-cont">
			<section class="sesion">
				<h2>Crea una nueva cuenta</h2>
				<form class="formulario" method="post" action="login.php">
					<input type="text" name="nombre" class="input-text" placeholder="Nombre">
					<input type="text" name="apellidos" class="input-text" placeholder="Apellidos">
					<input type="text" name="usuario" class="input-text" placeholder="Elige nombre de usuario">
					<input type="email" name="usuario" class="input-text" placeholder="Correo electronico">
					<input type="text" name="contraseña" class="input-text" placeholder="Contraseña">
					<input type="text" name="reply-contraseña" class="input-text" placeholder="Repite la contraseña">
					<div class="genero">
						<label for="genero">Genero: </label>
						<input type="radio" name="genero"><label for="hombre">Hombre</label>
						<input type="radio" name="genero"><label for="mujer">Mujer</label>
					</div>
					<button type="submit" class="boton">Registrarce</button>
					
				</form>
				
			</section>

			<section class="sesion">
				<h2>Inicia sesión</h2>
				<form class="formulario" action="login.php" method="POST">
					<?php 
						if(isset($_GET['error'])){
							echo '<p class="error" style="width: 90%; margin-top: 10px; padding: 10px 20px; background: #FFD1D1; box-sizing:border-box; border: 2px solid #E20000; color: #E20000;">
									<i class="icon-info"></i> Los datos ingresados no son validos 
									</p>';
						}
					 ?>
					
					<input type="text" name="NombreUsuario" class="input-text" placeholder="Nombre de usuario">
					<input type="password" name="Password" class="input-text" placeholder="Contraseña"><br><br>
					<input type="checkbox" name="remember" class="input-check" style="margin-top:7px;">
					<label for="remember">Manetener mi sesión abierta.</label>
					<button type="submit" class="boton">Iniciar sesión</button>

					
				</form>
				
			</section>
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