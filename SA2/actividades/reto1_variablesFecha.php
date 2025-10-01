<?php
/*
Reto 1 – Variables

Crea un script en PHP que guarde tu nombre y tu año de nacimiento en dos
variables.
Calcula tu edad de manera dinámica (es decir, con el año actual usando date()
y no escribiéndolo a mano).

Muestra:
Hola, soy [nombre] y tengo [edad] años.

Solución:
*/

$nombre = "Lucía";
$anoNacimiento = 2004;
$edad = date("Y") - $anoNacimiento;

echo "Hola, soy $nombre y tengo $edad años.";
?>

