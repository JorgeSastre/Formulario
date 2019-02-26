var soluciones = ["a","c","d","b","b","d","c","c","a","b"];
var aciertos=0;
var erroneos=0;


function tratar_pregunta(respuestas,num_preg,correcta){
	for(var i=0;i<respuestas.length;i++){ // recorre array de respuestas.
		var id="label"+num_preg+"_"+(i+1); // variable que indica el identificador de la respuesta en el HTML
		var resp=document.getElementById(id); //recoge el valor en la variable resp del label indicado en id
		if(respuestas[i].value==correcta){ //Si el valor de la respuesta es igual a la solución que le pasas se ejecuta la sentencia
			resp.className="correcta"; //Cambia el color de la respuesta correcta
			if(respuestas[i].checked){ //Entra cuando la respuesta esta seleccionada
				aciertos++; //Suma acierto
			}
			else{
				erroneos++; //Suma fallo
			}
		}
		else{
			if(respuestas[i].checked){
				resp.className="incorrecta"; //Cambia el color de  la pregunta incorrecta
			}
		}
	}

}

function corregir(){
	for(var i=0;i<soluciones.length;i++){//Recorre toas las soluciones
		var nombre="radio"+(i+1); //Nombre de los imput de cada pregunta
		var preguntas=document.getElementsByName(nombre); //Recoge todo el array de respuestas de la pregunta
		tratar_pregunta(preguntas,i+1,soluciones[i]); //Pasas el array de las respuestas, el numero de la pregunta y la solucion de esa pregunta
	}	
	
	alert ("Has acertado "+aciertos+" de 10" ); //Te muestra la cantidad de aciertos que has tenido
}