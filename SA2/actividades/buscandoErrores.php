<?php

// operadores

$x = 5;
$y = 2;
echo "La suma es: " + ($x + $y);
echo "¿x es mayor que y? " . $x > $y;

/*
Errores a detectar:
1. En PHP no se usa + para concatenar, sino . .
2. La expresión ". $x > $y" no funciona como se espera, hay que usar un
operador ternario.

Código corregido:
*/


$x = 5;
$y = 2;
echo "La suma es: " . ($x + $y) . "<br>";
echo "¿x es mayor que y? " . ($x > $y ? "Sí" : "No");


// variables

$nombre = Juan;
$edad = "20";
echo "Hola, me llamo  . $nombre  y tengo  . $edad  años.";

/*
Errores a detectar:
1.Falta comillas en el valor de la variable $nombre.
2.En los echo faltan los operadores de concatenación ..

Código corregido:
*/

$nombre = "Juan";
$edad = 20;
echo "Hola, me llamo " . $nombre . " y tengo " . $edad . " años.";

//Fechas

date_default_timezone("Europe/Madrid");
echo "Hoy es: " date("d-m-Y");

/*
Errores a detectar:
1.La función correcta es date_default_timezone_set(), no date_default_timezone().
2.En el echo falta el operador de concatenación ..

Código corregido:
*/

date_default_timezone_set("Europe/Madrid");
echo "Hoy es: " . date("d-m-Y");


// Arrays

$frutas = array("Manzana", "Pera", "Naranja";
echo $frutas[3];

/*
Errores a detectar:
3.Falta un paréntesis de cierre en la declaración del array.
2.El índice [3] no existe (el array tiene 3 elementos → índices 0,1,2)

Código corregido:
*/

$frutas = array("Manzana", "Pera", "Naranja");
echo $frutas[2]; // Naranja


?>