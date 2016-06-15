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
	 	<li><a href="">Incio de sesion</a></li>
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

	<section class="formSesion" action="Controlador.php" method="POST">
		<div class="contenido">
			<p>INICIO DE SESIÓN</p>
			<form action="">
				<div class="input-group">
				  <input type="text" class="form-control" name="name" placeholder=" Name">			  
				</div><br>
				<div class="input-group">				 
				  <input type="text" class="form-control" name="password" placeholder=" Password">
				</div><br>
				<input type=image id="botonLogin" src="img/BotonLogin.png" width="80" height="20">	
				<!--div donde se mostrara un mensaje al tratar de loguearse-->
					<div class="mensajeAcceso">
						<?php
	                        echo "<div class='alert alert-success'><strong>".'Bienvenido'."</strong></div>";
	                        echo "<div class='alert alert-danger'><strong>".'No puede acceder'."</strong></div>";
						?>
					</div>		 
			</form>		
		</div>
	</section>
			


	
</body>
</html>