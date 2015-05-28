<!DOCTYPE HTML>
<html>
<head>
<title>Total MakeOver | Detalle</title>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="../web/images/cart.ico" type="image/x-ic"/>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'> 
<link href="../web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../fonts/style.css">
<!-- start details -->
<link rel="stylesheet" type="text/css" href="web/css/productviewgallery.css" media="all" />
<script type="text/javascript" src="../web/js/jquery.min.js"></script>
<script type="text/javascript" src="../web/js/cloud-zoom.1.0.3.min.js"></script>
<script type="text/javascript" src="../web/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="../web/js/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="../web/js/jquery.fancybox-thumbs.js"></script>
<script type="text/javascript" src="../web/js/productviewgallery.js"></script>
<!-- start top_js_button -->
<script type="text/javascript" src="../web/js/jquery.min.js"></script>
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
	            	        <li class="nav-item"><a class="active" href="home-priv.php">Home</a></li>
							<li class="nav-item"><a href="sale.html">Sale</a></li>
							<li class="nav-item"><a href="handbags.html">Handbags</a></li>
							<li class="nav-item"><a href="accessories.html">Accessories</a></li>
							<li class="nav-item"><a href="shoes.html">Shoes</a></li>
							<li class="nav-item"><a href="service.html">Services</a></li>
							<li class="nav-item"><a href="contact.html">Contact</a></li>
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
	<!-- start content -->
	<div class="single">
			<!-- start span1_of_1 -->
			<div class="left_content">
			<div class="span1_of_1" style="width:450px;">
				<!-- start product_slider -->
				<div class="product-view" style="width: 350px; margin-left:50px;">
				    <div class="product-essential">
				        <div class="product-img-box">
				    <?php
						include 'conexion.php';
						$re = mysql_query("select * from producto where id_producto=".$_GET['id_producto']) or die (mysql_error());
						while ($f=mysql_fetch_array($re)) {
					?>				    				    
				    <div class="product-image" style="margin-left: 50px;"> 
				        <a class="cs-fancybox-thumbs cloud-zoom" rel="adjustX:30,adjustY:0,position:'right',tint:'#202020',tintOpacity:0.5,smoothMove:2,showTitle:true,titleOpacity:0.5" data-fancybox-group="thumb" href="" title="Women Shorts" alt="Women Shorts">
				           	<img src="<?php echo $f['foto'] ?>" alt="<?php echo $f['nombre'] ?>" title="<?php echo $f['nombre'] ?>" />
				        </a>
				   </div>
					<script type="text/javascript">
						var prodGallery = jQblvg.parseJSON('{"prod_1":{"main":{"orig":"<?php echo $f['foto'] ?>","main":"<?php echo $f['foto'] ?>","thumb":"<?php echo $f['foto'] ?>","label":""},"gallery":{"item_0":{"<?php echo $f['foto'] ?>","main":"<?php echo $f['foto'] ?>","thumb":"<?php echo $f['foto'] ?>","label":""},"item_1":{"orig":"<?php echo $f['foto'] ?>","main":"<?php echo $f['foto'] ?>","thumb":"<?php echo $f['foto'] ?>","label":""},"item_2":{"orig":"<?php echo $f['foto'] ?>","main":"<?php echo $f['foto'] ?>","thumb":"<?php echo $f['foto'] ?>","label":""},"item_3":{"orig":"<?php echo $f['foto'] ?>","main":"<?php echo $f['foto'] ?>","thumb":"<?php echo $f['foto'] ?>","label":""},"item_4":{"orig":"<?php echo $f['foto'] ?>","main":"<?php echo $f['foto'] ?>","thumb":"<?php echo $f['foto'] ?>","label":""}},"type":"simple","video":false}}'),
						    gallery_elmnt = jQblvg('.product-img-box'),
						    galleryObj = new Object(),
						    gallery_conf = new Object();
						    gallery_conf.moreviewitem = '<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt=""><img src="" src_main="" width="64" height="85" title="" alt="" /></a>';
						    gallery_conf.animspeed = 200;
						jQblvg(document).ready(function() {
						    galleryObj[1] = new prodViewGalleryForm(prodGallery, 'prod_1', gallery_elmnt, gallery_conf, '.product-image', '.more-views', 'http:');
						        jQblvg('.product-image .cs-fancybox-thumbs').absoluteClick();
						    jQblvg('.cs-fancybox-thumbs').fancybox({ prevEffect : 'none', 
						                             nextEffect : 'none',
						                             closeBtn : true,
						                             arrows : true,
						                             nextClick : true, 
						                             helpers: {
						                               thumbs : {
						                                   width: 64,
						                                   height: 85,
						                                   position: 'bottom'
						                               }
						                             }
						                             });
						    jQblvg('#wrap').css('z-index', '100');
						            jQblvg('.more-views-container').elScroll({type: 'vertical', elqty: 4, btn_pos: 'border', scroll_speed: 400 });
						        
						});
						
						function initGallery(a,b,element) {
						    galleryObj[a] = new prodViewGalleryForm(prods, b, gallery_elmnt, gallery_conf, '.product-image', '.more-views', '');
						};
					</script>
				</div>
				</div>
				</div>
				<!-- end product_slider -->
			</div>
			<!-- start span1_of_1 -->

			<div class="span1_of_1_des" style="width:450px;">
				  <div class="desc1">
					<h3><?php echo $f['nombre'] ?></h3>
					<p><?php echo $f['descripcion'] ?></p>
					<h5>$ <?php echo $f['precio'] ?></h5>
					<div class="available">
						<h4>Opciones disponibles :</h4>
						<ul>
							<li>Color:
								<select>
								<option>Silver</option>
								<option>Black</option>
								<option>Dark Black</option>
								<option>Red</option>
							</select></li>
							<li>Talla:
								<select>
									<option>L</option>
									<option>XL</option>
									<option>S</option>
									<option>M</option>
								</select>
							</li>
							
						</ul><br>

						<a href="carrito.php?id_producto=<?php echo $f['id_producto'];?>" class="agregar" style="background:#4CCFC1; color: #fff; padding:10px 20px; 
	box-sizing:border-box; width:400px;">Añadir a carrito  <i class="icon-cart"></i></a>
					
						<?php 		
							 } 
						 ?>
						<div class="clear"></div>
					</div>
					<div class="share-desc">
						<div class="share">
							<h4>Compartir producto:</h4>
							<ul class="share_nav">
								<li><a href="#"><img src="../web/images/facebook.png" title="facebook"></a></li>
								<li><a href="#"><img src="../web/images/twitter.png" title="Twiiter"></a></li>
								<li><a href="#"><img src="../web/images/rss.png" title="Rss"></a></li>
								<li><a href="#"><img src="../web/images/gpluse.png" title="Google+"></a></li>
				    		</ul>
						</div>
						<div class="clear"></div>
					</div>
			   	 </div>
			   	</div>
			   	<div class="clear"></div>
			   	
			   	</div>
			   	<!-- start sidebar -->
			 <div class="left_sidebar">
					<div class="sellers">
						<h4>Promociones</h4>
						<div class="banner-wrap bottom_banner color_link">
								<a href="#" class="main_link">
								<figure><img src="../web/images/delivery.png" alt=""></figure>
								<h5><span>Envío gratis</span><br>ordenes inf. $100.000.</h5><p>Oferta valida para todos los productos.</p></a>
						 </div>
						 <div class="brands">
							 <h1>Marcas</h1>
					  		 <div class="field">
				                 <select class="select1">
				                   <option>Porfavor selecciona</option>
										<option>Americanino</option>
										<option>Chevignon</option>
										<option>Livi's</option>
				                  </select>
				            </div>
			    		</div>
					</div>
				</div>
					<!-- end sidebar -->
          	    <div class="clear"></div>
	       </div>	
	<!-- end content -->
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