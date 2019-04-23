<?php

/**

Crear una función que determine si una palabra contiene las 5 vocales sin repetir ninguna. Presentar un mensaje que indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.

Ejemplos:
Murciélago
aceituno
acuífero
http://buscapalabras.com.ar/palabras-con-las-cinco-vocales.html
 */
?>


<?php
	$palabra = "Murcielago";
	$Vocales = array ('a','e','i','o','u'); 
	echo "Palabra o Frase es: ".$palabra."<br/>";
	echo "<br>";
	$miArray = count_chars (strtolower($palabra),1);

	foreach($miArray as $indiceNum => $veces){
		$letra =chr($indiceNum); 
		if (in_Array($letra,$Vocales)){
			echo "Vocal: ".$letra.", encontrada ".$veces."veces<br/>";
		}
	}
	echo "<br>";
?>