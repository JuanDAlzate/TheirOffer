<?php 	
		$servidor="localhost";
		$usuario="root";
		$pass="";
		$db="thisofferdb";		 

		$conexion=new mysqli($servidor,$usuario,$pass,$db);
		 if($conexion->connect_errno){
		 	echo "ERROR AL CONECTARSE {$conexion->connect_errno}";
		 }

 ?>