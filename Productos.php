<?php 
	SESSION_START(); 
	include("ControladorUsuario.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Producto | Their_Offer</title>
	<!--Enlace al archivo de bootstrap-->
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<!--Enlace que permite utilizar las fuentes de google-->
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<!--Link que permite enlazar el archivo de javascript-->
	<script type="text/javascript" src="js/main.js"></script>
	<!--Link que permite enlazar el archivo de jquery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript">
			$(document).ready(function(){
		   			$(".name").click(function(){
			        var value = $(this).text();
			        $('#identificacion').val(value);
		    	});
		});
	</script>
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
	 	<li><a href="">Hola <?php echo $_SESSION['name']; ?></a></li>
	 	<li><a href="ControladorUsuario.php?accion=borrar">Cerrar sesión</a></li>
	 </ul>	 
	</nav>
	<!--/nav-->	
		
	<section class="navbar_second">
		<a href="Index.html"><img src="img/Logo.png" alt=""></a>
	</section>	
	<!--/div.principal-->
	
	<section class="bloque">
			<ul class="list_primary">
				<li><a href="PanelControl.php" onmouseover="verOpcion()">Usuarios</a></li>
				<li><a href="">Productos</a></li>
				<li><a href="">Categorias</a></li>				
			</ul>
			<ul id="list_secundary" class="list_secundary">
				<li><a href="" onmouseover="CrearUsuario()">Crear usuario</a></li>
				<li><a href="">Ver los usuarios</a></li>
				<li><a href="">Eliminar usuario</a></li>				
			</ul>
	</section>
	<!--/section.bloque-->

	<section class="formSesion" >
		<div class="contenido form-product">
			<p>OFERTAR PRODUCTO</p>
			<form action="" action="" method="post">
				<div class="input-group">
				  <label for="categoria">Categoria: 				 
						  <select id="categoria" name="categoria" class="form-control">
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
						  </select>
				  </label>
				</div><br>
				<div class="input-group">	
				  <label for="imagen">Foto del producto: <input type="file" class="form-control" name="image" placeholder=" Foto del producto"></label>				  
				</div><br>
				<div class="input-group">	
				  <label for="imagen">Precio: <input type="number" class="form-control" name="precio" placeholder=" Valor del producto"></label>				  
				</div><br>
				
				<div id="botones">
					<input type=submit id="botonesSubmit" name="botonLogin" value="CREATE">
					<input type=submit id="botonesSubmit" name="botonEliminar" value="ELIMINAR">
					<input type="submit" id="botonesSubmit" name="botonActualizar" value="UPDATE">
					<input type="submit" id="botonesSubmit" name="botonBuscarUsuario" value="BUSCAR USUARIO">
					<input type="reset" id="botonesSubmit" value="LIMPIAR">
				</div>
				
				<!--div donde se mostrara un mensaje al tratar de loguearse-->
					<div class="mensajeAcceso">
						<?php
							//Decision que permite insertar al accionar el boton insertar
							if(isset($_POST['botonLogin'])) {

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

							//Decision que permite eliminar al accionar el boton eliminar
							if(isset($_POST['botonEliminar'])) {
									$id=$_POST['id'];
									Delete($id);		
							}

							//Decision que permite actualizar un usuario al accionar el boton update
							if(isset($_POST['botonActualizar'])) {

									$id=$_POST['id'];
							        $name=$_POST['name'];
							        $lastName=$_POST['lastName'];
							        $phone=$_POST['phone'];
							        $address=$_POST['address'];
							        $email=$_POST['email'];
							        $pass=$_POST['pass'];
									Update($name,$lastName,$phone,$address,$email,$pass,$id);
								}
							
						?>						
				    </div>
			</form>		
		</div>
		<!--/div.content_insert-->

		<div class="contenido content_list">
			<p>LISTA DE USUARIOS</p>
			<form action="" method="post">
				<table class="table">
					<tr>
						<td class="column-primary"><strong>Identificación</strong></td>
						<td class="column-primary"><strong>Nombre</strong></td>
						<td class="column-primary"><strong>Apellido</strong></td>
						<td class="column-primary"><strong>Telefono</strong></td>
						<td class="column-primary"><strong>Dirección</strong></td>
						<td class="column-primary"><strong>Correo</strong></td>
						<td class="column-primary"><strong>Password</strong></td>
					</tr>
					<?php  
							//Decision que permite eliminar al accionar el boton eliminar
							if(isset($_POST['botonBuscarUsuario'])) {
									$id=$_POST['id'];
									buscarUsuario($id);
								}else{
									Listar('id_usuario');
								}	
					?>
					<!--<tr>

						<td><a href="#" class="name"><?php Listar('id_usuario'); ?></a></td>
						<td><a href="#" class=""><?php Listar('nombre'); ?></a></td>
						<td><a href="#" class=""><?php Listar('apellido'); ?></a></td>
						<td><a href="#" class=""><?php Listar('telefono'); ?></a></td>
						<td><a href="#" class=""><?php Listar('direccion'); ?></a></td>
						<td><a href="#" class=""><?php Listar('correo'); ?></a></td>
						<td><a href="#" class=""><?php Listar('password'); ?></a></td>		
					</tr>-->	
				</table>
		</div>
	</section>

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
			<div class="label">#subasta</div>
			<div class="label">#venta</div>
			<div class="label">#compra</div>
			<div class="label">#ofertas</div>
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