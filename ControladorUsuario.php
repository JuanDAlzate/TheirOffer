<?php 


	//Function que permite insertar un usuario 
	function Insertar($identificacion,$nombre,$apellido,$telefono,$direccion,$correo,$password){
		include("Conexion.php");

		$consulta="insert into usuario (id_usuario,nombre,apellido,telefono,direccion,correo,password) VALUES ('$identificacion','$nombre','$apellido','$telefono','$direccion','$correo','$password')";
		$conexion->query($consulta);

		//Condicion que permite verificar si la consulta se realizo
		if($conexion->affected_rows==1){
				echo '<script language="javascript">alert("Se ha registrado el usuario");</script>'; 
		}else{
			    echo '<script language="javascript">alert("No se ejecuto la consulta");</script>';
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

	function Listar($columna){
		include("Conexion.php");

		$consulta="SELECT * FROM usuario";
		$resultado=$conexion->query($consulta);

		if(mysqli_num_rows($resultado)>=1){
			while($usuarios=$resultado->fetch_array(MYSQLI_BOTH)){
				echo $usuarios[$columna]."<br>";
			}
		}else{
			echo "no hay registros para listar";
		}

		/*while($usuarios=$resultado->fetch_array(MYSQLI_BOTH)){
				echo $usuarios[2]."<br>";
		}*/
	}

	//Funcion que se utilizara para logearse
	function Login($correo, $password){
		include("Conexion.php");
		
		$consulta="select * from usuario where correo='$correo' and password='$password'";
		$resultado=$conexion->query($consulta);
		$row=$resultado->num_rows;

		if($row!=0){
			header('Location: PanelControl.php');
		}else{
			echo '<script language="javascript">alert("Compruebe sus credenciales");</script>'; 
			echo '<script>window.location.href="InicioSesion.php";</script>';			
		}
	}
		
		//Condicion para comprobar que se este ejecutando la insercion correctamente
		


 ?>
