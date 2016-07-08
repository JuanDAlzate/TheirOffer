<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio | Their_Offer</title>
	<!--Enlace al archivo de bootstrap-->
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<!--Enlace que permite utilizar las fuentes de google-->
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<nav style="display:block;">
	 <ul>
	 	<li><a href=""><img src="img/IconFacebook.png" alt=""></a></li>
	 	<li><a href=""><img src="img/IconTwitter.png" alt=""></a></li>
	 	<li><a href=""><img src="img/IconGoogleMas.png" alt=""></a></li>
	 	<li><a href=""><img src="img/IconWhatsapp.png" alt=""> +57 3136299220</a></li>
	 </ul>	
	 <ul>
	 	<li><a href="">Registrate</a></li>
	 	<li><a href="InicioSesion.php">Incio de sesion</a></li>
	 	<li><a href="">Contactenos</a></li>
	 </ul>	 
	</nav>
	<!--/nav-->	
		
	<section class="navbar_second">
		<a href="Index.html"><img src="img/Logo.png" alt=""></a>
		<ul>
				<li><a href="">Inicio</a></li>
			    <li><a href="">Quienes Somos</a></li>
				<li><a href="">Contactenos</a></li>	
		</ul>
	</section>	
	<!--/div.principal-->
	
	<section class="bloque">
			<h1>INICIO DE SESION</h1>
	</section>
	<!--/section.bloque-->

	<section class="formSesion" >
		<div class="contenido">
			<p>INICIO DE SESIÓN</p>
			<form action="" action="" method="post">
				<div class="input-group">
				  <input type="text" class="form-control" name="correo" placeholder=" Correo">			  
				</div><br>
				<div class="input-group">				 
				  <input type="text" class="form-control" name="password" placeholder=" Password">
				</div><br>
				<input type=submit id="botonLogin" name="botonLogin" value="LOG IN"><br><br>
				<!--div donde se mostrara un mensaje al tratar de loguearse-->
					<div class="mensajeAcceso">
						<?php
							if(isset($_POST['botonLogin'])) {
							
							        include("ControladorUsuario.php");
							        $correo=$_POST['correo'];
							        $password=$_POST['password'];
							        Login($correo,$password);
							}
						?>						
					</div>
			</form>		
		</div>
	</section>
	<!--/section.formSesion-->

	<section class="follow">
	 <div class="follow-images">
		   <div class="img">
				<a href="https://www.facebook.com/JDalzateRestrepo"><img src="img/Facebook.png" alt=""></a>
			</div>
			<div class="img">
				<a href="https://twitter.com/JuanDAlzate04"><img src="img/IcoTwitter.png" alt=""></a>
			</div>
			<div class="img">
				<a href="https://github.com/JuanDAlzate"><img src="img/IconGithub.png" alt=""></a>
			</div>
		</div>		
	</section>
	<!--section.follow-->

	<footer>
		<div class="content">
			<strong><h3>NOSOTROS</h3></strong>
			<p class="description">
			 Estamos enfocados en prestarte un sistema que permite subartar los productos que quieras vender, atraves de nuestro sitio alojado en la web, sitio que permite subastar un producto y en donde gran cantidad de personas estaran al tanto de los productos que se estan ofreciendo y asi poder ofrecer y cerrar la compra. 
			</p>
		</div>	
		<div class="content">
			<strong><h3>ULTIMA NOTICIAS</h3></strong>
			 <div class="news">
			 	<div class="square"></div>
				<p class="description description-news">
			 		Un 90% de los productos subastados se vende a un buen precio, <br> aun no como lo pensabas
			 	</p>
			 </div>
			 <div class="news">
			 	<div class="square"></div>
				<p class="description description-news">
			 		Todos nuestros usuarios estan satisfechos con los resultados de TheirOffer.com 
			 	</p>
			 </div>
			  <div class="news">
			 	<div class="square"></div>
				<p class="description description-news">
			 		Estamos enfocados 
			 	</p>
			 </div>			 
		</div>	
		<div class="content">
			<strong><h3>ETIQUETAS</h3></strong>
			<div class="label">subasta</div>
			<div class="label">venta</div>
			<div class="label">compra</div>
			<div class="label">ofertas</div>
		</div>	
		<div class="sub-footer">
			<h4>Todos los derechos reservados TheirOffers</h2>
			<ul>
				<li><a href="">INICIO</a></li>
				<li><a href="">QUIENES SOMOS</a></li>
				<li><a href="">CONTACTENOS</a></li>
			</ul>
		</div>
	</footer>
	<!--/footer>			


	
</body>
</html>