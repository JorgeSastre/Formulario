<html>
<head>
	<title>Validacion</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="icon" href="img/zscaler.ico">
</head>
<body>
<?php
	if(isset($_POST['usuario']) && isset($_POST['clave'])){
		$usuario = $_POST['usuario'];
		$clave = md5($_POST['clave']);
		
		// conectar a la base de datos 
		$conexion = mysqli_connect("localhost","root","","formulario");
		$consulta="SELECT usuario, clave FROM usuarios WHERE usuario='$usuario'";
		// ejecuta la instruccion
		$resultado = mysqli_query($conexion,$consulta);
		
		// muestra el resultado como un array
		$filas = mysqli_fetch_array($resultado);
		
		// condicion que comprueba que el array no esta vacio
		if($filas){
			if(count($filas)>1){
				if($clave == $filas[1]){
					header ("Location: test.php");
				}else{
					echo "<h1>La contraseña es erronea. Vuelva a Iniciar Sesion</h1><br/>";
					echo "<a href='i_sesion.html'><input type='button' value='Iniciar Sesion'></a>";
				}
			}else{
				echo"<h3>El usuario no existe. Vaya a registrar.</h3>";
				echo "<a href='registrar.html'><input type='button' value='Registrar'></a>";
			}
		}else{
			echo"<h3>El usuario no existe. Vaya a registrar.</h3>";
			echo "<a href='registrar.html'><input type='button' value='Registrar'></a>";
		}			
	}else{
		echo "<h3>Alguno de los campos estan vacios, rellena todos.</h3>";
		echo "<a href='i_sesion.html'><input type='button' value='Inicio de Sesion'></a>";
	}
?>
</body>
</html>