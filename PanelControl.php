<?php include("ControladorUsuario.php"); ?>
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
	 	<li><a href=""></a></li>
	 	<li><a href="InicioSesion.php"></a></li>
	 	<li><a href="">Cerrar sesión</a></li>
	 </ul>	 
	</nav>
	<!--/nav-->	
		
	<section class="navbar_second">
		<a href="Index.html"><img src="img/Logo.png" alt=""></a>
	</section>	
	<!--/div.principal-->
	
	<section class="bloque">
			<ul class="list_primary">
				<li><a href="" onclick="ver(1)">Usuarios</a></li>
				<li><a href="">Productos</a></li>
				<li><a href="">Categorias</a></li>				
			</ul>
			<ul class="list_secundary">
				<li><a href="">Crear usuario</a></li>
				<li><a href="">Ver los usuarios</a></li>
				<li><a href="">Eliminar usuario</a></li>				
			</ul>
	</section>
	<!--/section.bloque-->

	<section class="formSesion" >
		<div class="contenido content_insert">
			<p>REGISTRO DE USUARIOS</p>
			<form action="" action="" method="post">
				<div class="input-group">
				  <input type="text" class="form-control" name="id" placeholder=" Identificación">			  
				</div><br>
				<div class="input-group">				 
				  <input type="text" class="form-control" name="name" placeholder=" Nombre">
				</div><br>
				<div class="input-group">				 
				  <input type="text" class="form-control" name="lastName" placeholder=" Apellido">
				</div><br>
				<div class="input-group">				 
				  <input type="text" class="form-control" name="phone" placeholder=" Telefono">
				</div><br>
				<div class="input-group">				 
				  <input type="text" class="form-control" name="address" placeholder=" Direccion">
				</div><br>
				<div class="input-group">				 
				  <input type="text" class="form-control" name="email" placeholder=" Correo">
				</div><br>
				<div class="input-group">				 
				  <input type="text" class="form-control" name="pass" placeholder=" Password">
				</div><br>
				<input type=submit id="botonLogin" name="botonLogin" value="CREATE"><input id="botonLogin" type="reset" value="LIMPIAR"><br>
				<!--div donde se mostrara un mensaje al tratar de loguearse-->
					<div class="mensajeAcceso">
						<?php
							if(isset($_POST['botonLogin'])) {

							        include("ControladorUsuario.php");
							        $id=$_POST['id'];
							        $name=$_POST['name'];
							        $lastName=$_POST['lastName'];
							        $phone=$_POST['phone'];
							        $address=$_POST['address'];
							        $email=$_POST['email'];
							        $pass=$_POST['pass'];
							        //Funcion que permite insertar un usuario a la base de datos
							        Insertar($id,$name,$lastName,$phone,$address,$email,$pass);
							}
						?>						
				    </div>
			</form>		
		</div>
		<!--/div.content_insert-->

		<div class="contenido content_list">
			<p>LISTA DE USUARIOS</p>
			<form action="" method="post">
				<table>
					<tr>
						<td><strong>Identificación</strong></td>
						<td><strong>Nombre</strong></td>
						<td><strong>Apellido</strong></td>
						<td><strong>Telefono</strong></td>
						<td><strong>Dirección</strong></td>
						<td><strong>Correo</strong></td>
						<td><strong>Password</strong></td>
					</tr>
					<tr>
						<td><?php Listar('id_usuario'); ?></td>
						<td><?php Listar('nombre'); ?></td>
						<td><?php Listar('apellido'); ?></td>
						<td><?php Listar('telefono'); ?></td>
						<td><?php Listar('direccion'); ?></td>
						<td><?php Listar('correo'); ?></td>
						<td><?php Listar('password'); ?></td>						
					</tr>
				</table>
		</div>

	</section>
			


	
</body>
</html>