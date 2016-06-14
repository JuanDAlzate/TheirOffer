<?php 

	//Función que permite el inicio de sesion
	function InicioSesion($name,$password){}

	//Function que permite insertar un usuario 
	function Insertar(){
		include("Conexion.php");

		$nombre="Mateo";
		$id_usuario=1097866;
		$apellido="Fresas Campos";
		$telefono="7667643";
		$direccion="Cr 32 #43";
		$password="00912";
		$correo="Campos@hotmail.com";

		$consulta="insert into usuario (id_usuario,nombre,apellido,telefono,direccion,correo,password) VALUES ('$id_usuario','$nombre','$apellido','$telefono','$direccion','$correo','$password')";
		$conexion->query($consulta);

		//Condicion que permite verificar si la consulta se realizo
		if($conexion->affected_rows==1){
				echo "Se realizo la consulta";
		}else{
			echo "No se ejecuto la consulta";
		}

	}
	//Funcion que permite eliminar un usuario
	function Delete(){
		include("Conexion.php");

		$id_usuario=14494068;
		$consulta="delete from usuario where id_usuario='$id_usuario';";
		$conexion->query($consulta);

		//Condicion que permite verificar si la consulta se realizo
		if($conexion->affected_rows==1){
				echo "Se realizo la consulta";
		}else{
			echo "No se ejecuto la consulta";
		}		
	}

	function Listar(){
		include("Conexion.php");

		$consulta="SELECT * FROM usuario";
		$resultado=$conexion->query($consulta);

		if(mysqli_num_rows($resultado)>=1){
			echo "Si hay registros para listar";
		}else{
			echo "no hay registros para listar";
		}

		/*while($usuarios=$resultado->fetch_array(MYSQLI_BOTH)){
				echo $usuarios[2]."<br>";
		}*/
	}

	//Funcion que se utilizara para logearse
	function Login(){
		include("Conexion.php");

		$correo="yeison@hotmail.com";
		$pass="1234";
		$consulta="select * from usuario where correo='$correo' and password='$pass'";
		$resultado=$conexion->query($consulta);
		$row=$resultado->num_rows;

		if($row==1){
			echo "Puedes loguearte";
			header('Location:Index.html');
		}else{
			echo "No puedes acceder";
		}
	}
		
		//Condicion para comprobar que se este ejecutando la insercion correctamente
		 echo Login();


 ?>
