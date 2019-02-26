<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<?php
	$conexion = mysqli_connect("localhost","root","","formulario");
	if(!$conexion){
		echo "errno de depuración: " . mysqli_connect_errno(); // numero de error mysql
		echo "error de depuración: " . mysqli_connect_error(); // mensaje de error mysql
	}
	
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$rclave = $_POST['rclave'];
	$usuarios = mysqli_real_escape_string($conexion, $usuario);
	$sql = "SELECT usuario FROM usuarios WHERE usuario = '".$usuario."'";
	$resultado = mysqli_query($conexion, $sql);
	$tupla = mysqli_fetch_array($resultado);
	if(strlen($usuario) > 0 && strlen($clave) > 0 && strlen($rclave) > 0 ){
		if ($clave == $rclave){
			if($tupla[0] != $usuario){
				$clave = md5($clave);
				$rclave = md5($rclave);
				$insert = "INSERT INTO usuarios VALUES (NULL,'".$usuario."','".$clave."','".$rclave."')";
				$ok = mysqli_query($conexion, $insert);
				if($ok){
					header ("Location:i_sesion.html");
				}else{
					echo mysqli_error($conexion);
				}
			}else{
				echo "<h1>Este usuario ya esta registrado. Vuelva a Inicio de Sesion</h1><br/>";
				echo "<a href='i_sesion.html'><input type='button' value='Iniciar Sesion'></a>";
			}
		}else{
			echo "<h1>Las claves no coinciden.</h1>";
			echo "<a href='registrar.html'><input type='button' value='Registrar'></a>";
		}
	}else{
		echo "<h1>Alguno de los campos estan vacios, rellena todos.</h1>";
		echo "<a href='registrar.html'><input type='button' value='Registrar'></a>";
	}
?>
</body>
</html>