<?php
/*
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
