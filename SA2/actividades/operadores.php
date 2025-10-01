<?php
/*
Escribe un script en PHP que:
1.Guarde en una variable $x el valor 7.
2.Guarde en otra variable $y el valor 3.
3.Calcule:
    La suma, resta, multiplicación y división.
    El resto de la división (%).
    Si $x es mayor que $y.
    Si $x es par.
*/

$x = 7;
$y = 3;

echo "Suma: " . ($x + $y) . "<br>";
echo "Resta: " . ($x - $y) . "<br>";
echo "Multiplicación: " . ($x * $y) . "<br>";
echo "División: " . ($x / $y) . "<br>";
echo "Resto: " . ($x % $y) . "<br>";

echo "¿Es $x mayor que $y? " . ($x > $y ? "Sí" : "No") . "<br>";
echo "¿Es $x par? " . ($x % 2 == 0 ? "Sí" : "No");
?>
