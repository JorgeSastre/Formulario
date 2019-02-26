<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Test ZScaler</title>
		<link rel="stylesheet" type="text/css" href="css/zscaler.css" media="screen" /> <!-- Enlace con pa pagina del css -->
		<link rel="icon" href="img/zscaler.ico"> <!-- Enlace para poner un icono en la pestaña de la pagina -->
		<div id="container">
			<header><img src="img/zscaler.jpg"</header>
		</div><!-- Este div esta para poner la imagen de cabecera de ZScaler -->
		</br>
		<h1>Test sobre ZScaler</h1>
	
	
		<script src="js/JavaScript.js"></script>
    </head>
    <body>
        <?php
		    
            
            // Create connection
            $link = mysqli_connect("localhost","root","","formulario");
			
			// Change character set to utf-8
			mysqli_set_charset ($link,"utf8");
    
            // Check connection
            if (mysqli_connect_errno($link)) {
                mysqli_connect_error();
			}		
                                  
            $result = mysqli_query($link,"SELECT * FROM preguntas");
			$respuestas = mysqli_query($link, "SELECT * FROM respuestas");
			echo "<form>";
			$i = 1;
			$letras = array("a","b","c","d");
            while ($pregunta = mysqli_fetch_array($result)) {
				echo "<h3>¿".$pregunta[1]."</h3>";		
				$respuesta = mysqli_fetch_array($respuestas);
				for ($j=1;$j < 5;$j++) {
					echo "<p><input type='radio' name='radio".$i."' id='radio".$i."_".$j."' value='".$letras[$j-1]."' />";
					echo "<label name='radio".$i."_".$j."' id='label".$i."_".$j."'>".$respuesta[$j]."</label></p>";
				}
				$i++;
			} 
			
            mysqli_close($link);
        ?>
		
		<hr/>
		<br/>
		<input type="button" name="corrige" id="corregir" value="Corregir" onclick='corregir();'/>

		<br/>
		<br/>
		
		<div id="container2">
			<footer>
				<div id="foto"><img src="img/gsd.jpg"></img></div>
				<strong>Hecho por:</strong> Jorge Sastre Villena<br/>
				<strong>Grado Superior de ASIR</strong><br/>
				<strong>Para mas informacion sobre ZScaler:</strong> <a href="https://www.zscaler.com/">Web Oficial de ZSCaler</a>
			</footer>
		</div>
        </body>
</html>



