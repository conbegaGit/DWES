<?php
/*
En PHP tienes dos operadores exclusivos para trabajar con cadenas de texto. 
1. Con el operador de concatenación punto (.) puedes unir las dos cadenas 
de texto que le pases como operandos. 
2. El operador de asignación y concatenación (.=) concatena al argumento 
del lado izquierdo la cadena del lado derecho.

Comillas simples ' ' : el texto se muestra literalmente.
Comillas dobles " " : permiten interpretar variables dentro del texto.
*/

$var = "Paco";
echo "Hola $var <br>";
echo 'Hola $var <br>';
echo "Hola " . $var;

// Si queremos concatenar cadenas usamos .
$nombre = "Pau";
$apellido = "Martí";
echo $nombre . " " . $apellido; // Pau Martí

$a = "Módulo ";
$b = $a . "DWES"; // ahora $b contiene "Módulo DWES"
$a .= "DWES"; // ahora $a también contiene "Módulo DWES"

