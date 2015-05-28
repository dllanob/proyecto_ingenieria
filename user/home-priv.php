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
<title>Total Makeover</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../web/images/cart.ico" type="image/x-ic"/>
<link href='../http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link href="../web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../fonts/style.css">
<script type="text/javascript" src="../web/js/jquery.min.js"></script>
<!-- start slider -->		
	<link href="../web/css/slider.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="../web/js/modernizr.custom.28468.js"></script>
	<script type="text/javascript" src="../web/js/jquery.cslider.js"></script>
	<script type="text/javascript">
		$(function() {
			$('#da-slider').cslider();
		});
	</script>
		<!-- Owl Carousel Assets -->
		<link href="../web/css/owl.carousel.css" rel="stylesheet">
		     <!-- Owl Carousel Assets -->
		    <!-- Prettify -->
		    <script src="../web/js/owl.carousel.js"></script>
		        <script>
		    $(document).ready(function() {
		
		      $("#owl-demo").owlCarousel({
		        items : 4,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav : false,
			    scrollPerPage : false,
			    pagination : false,
    			paginationNumbers: false,
		      });
		
		    });
		    </script>
		   <!-- //Owl Carousel Assets -->
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
			<a href="home.priv.php"><p class="logo">TotalMakeOver</p></a>
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
				<li class="active"><a href="home-priv.php">Inicio</a></li> |
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
	          <script src="web/js/responsive.menu.js"></script>
         </div>		  
	<div class="clear"></div>
</div>
</div>
</div>
<!-- start slider -->
			<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2>Total MakeOver</h2>
					<p>Es una tienda de ropa para hombre y mujer en la que encuentras todo lo que buscas,  ofrecemos una  gran gama de colores y estilos novedosos, además de prendas como zapatos, bolsos, camisetas.</p>
					<div class="da-img"><img src="../web/images/slider1.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Recorre nuestra pagina</h2>
					<p>Visita nuestros catalogos y te darás cuenta que ofrecemos un nuevo estilo, estamos implantando una nueva moda de vestir. A demás todo el año habran promociones especiales, no te las puedes perder.</p>
					<div class="da-img"><img src="../web/images/slider2.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Marca confiable</h2>
					<p>Nuestra marca lleva años de recorrido en area de compra y venta de ropa y productos textiles de la mejor calidad para ofrecerle el mejor servicio y calidad a todos nuestros clientes.</p>
					<div class="da-img"><img src="../web/images/slider3.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Entrega segura</h2>
					<p>Nuestro servicio de entrega esta garantizado completamente en el cual podras tener tus productos lo mas pronto contigo y en el mejor estado.</p>
					<div class="da-img"><img src="../web/images/slider4.png" alt="image01" /></div>
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
        </div>
<!----start-cursual---->
<div class="wrap">
<!----start-img-cursual---->
	<div id="owl-demo" class="owl-carousel">

		<div class="item" onclick="location.href='details.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="../web/images/shoe_pic1.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="details.html">Zapato Negro</a></h4>
				<a href="details.html" class="btn">ver</a>
			</div>
		</div>

		<div class="item" onclick="location.href='details.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="../web/images/shoe_pic2.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="details.html">Zapato Café</a></h4>
				<a href="details.html" class="btn">ver</a>
			</div>
		</div>

		<div class="item" onclick="location.href='details.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="../web/images/shoe_pic3.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="details.html">Zapato Café</a></h4>
				<a href="details.html" class="btn">ver</a>
			</div>
		</div>

		<div class="item" onclick="location.href='details.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="../web/images/shoe_pic4.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="details.html">Mocasin Cafe</a></h4>
				<a href="details.html" class="btn">ver</a>
			</div>
		</div>

		<div class="item" onclick="location.href='details.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="../web/images/shoe_pic5.jpg" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="details.html">Mocasin Beige</a></h4>
				<a href="details.html" class="btn">ver</a>
			</div>
		</div>
			
	</div>
	<!----//End-img-cursual---->
</div>
<!-- start main1 -->
<div class="main_bg1">
<div class="wrap">	
	<div class="main1">
		<h2>Productos destacados</h2>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<!-- start grids_of_3 -->

		<?php
			include 'conexion.php';
			$re = mysql_query("select * from producto ") or die (mysql_error());
			while ($f=mysql_fetch_array($re)) {
		?>
		<div class="grids_of_3">
			<div class="grid1_of_3">
				<a href="details.php?id_producto=<?php echo $f['id_producto'];?>">
					<img src="<?php echo $f['foto'] ?>" alt="thum_producto" width="200"/>
					<h3><?php echo $f['nombre'] ?></h3>
					<div class="price">
						<h4>$<?php echo $f['precio'] ?><a href="details.php?id_producto=<?php echo $f['id_producto'];?>"><span>Ver</span></a></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
		<?php 		
			 } 
		 ?>
			
			<div class="clear"></div>
		</div>	
		<!-- end grids_of_3 -->
	</div>
</div>
</div>	

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
