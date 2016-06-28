<?php 


	//Function que permite insertar un usuario 
	function Insertar($identificacion,$nombre,$apellido,$telefono,$direccion,$correo,$password){
		include("Conexion.php");

		$consulta="select * from usuario where correo='$correo' and password='$password'";
		$resultado=$conexion->query($consulta);
		$row=$resultado->num_rows;
		if($row!=0){
			echo '<script language="javascript">alert("Ya se ha registrado un usuario con esta identificacion");</script>';
		}else{
			$consulta="insert into usuario (id_usuario,nombre,apellido,telefono,direccion,correo,password) VALUES ('$identificacion','$nombre','$apellido','$telefono','$direccion','$correo','$password')";
		$conexion->query($consulta);
		//Condicion que permite verificar si la consulta se realizo
		if($conexion->affected_rows==1){
				echo '<script language="javascript">alert("Se ha registrado el usuario");</script>'; 
		}else{
			    echo '<script language="javascript">alert("No se ejecuto la consulta");</script>';
		     }		
		}		
	}

	//Funcion que permite eliminar un usuario
	function Delete($id){
		include("Conexion.php");	

		$consulta="select * from usuario where id_usuario='$id'";
		$resultado=$conexion->query($consulta);
		$row=$resultado->num_rows;

		if($row!=0){	

			$consulta="delete from usuario where id_usuario='$id';";
			$conexion->query($consulta);
			//Condicion que permite verificar si la consulta se realizo
			if($conexion->affected_rows==1){
				echo "Se ha eliminado el usuario";
			}else{
			    echo "No se ha eliminado el usuario";
				 }
		}else{
			echo '<script language="javascript">alert("No se encuentra un usuario con esta identificación");</script>'; 		
		}	
	}

	//Funcion que permite listar todos los usuarios del sistema
	function Listar(){
		include("Conexion.php");

		$consulta="SELECT * FROM usuario";
		$resultado=$conexion->query($consulta);

		if(mysqli_num_rows($resultado)>=1){
			while($usuarios=$resultado->fetch_array(MYSQLI_BOTH)){
				echo "<tr><td class='name'>".$usuarios['id_usuario']."</td><td>".$usuarios['nombre']."</td><td>".$usuarios['apellido']."</td><td>".$usuarios['telefono']."</td><td>".$usuarios['direccion']."</td><td>".$usuarios['correo']."</td><td>".$usuarios['password']."</td></tr>";
			}
		}else{
				echo "no hay registros para listar";
		}
	

		/*while($usuarios=$resultado->fetch_array(MYSQLI_BOTH)){
				echo $usuarios[2]."<br>";
		}*/
	}

	//funcion que permite actualizar los datos de un usuarios
	function Update($name,$lastName,$telefono,$dir,$email,$pass,$id){
		include('Conexion.php');

		$consulta="UPDATE usuario SET nombre='$name',apellido='$lastName',telefono='$telefono',direccion='$dir',correo='$email',password='$pass' WHERE id_usuario='$id'; ";
		$conexion->query($consulta);

		//Condicion que permite verificar si la consulta se realizo
		if($conexion->affected_rows==1){
				echo '<script language="javascript">alert("Se ha actualizado el usuario");</script>'; 
		}else{
			    echo '<script language="javascript">alert("No se actualizado el usuario");</script>';
		     }	

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
		/*$id=41;
		$name="Jhohana Patricia";
		$lastName="Alzate Restrepo";
		$telefono="3122433222";
		$dir="Cr 22 # 43";
		$email="@hotmail.com";
		$pass="123";
		Update($name,$lastName,$telefono,$dir,$email,$pass,$id);
		//insertar($ide,$nom,$ape,$tel,$dir,$cor,$pass);*/

 ?>
	
