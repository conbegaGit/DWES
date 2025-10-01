<?php
/*
Enunciado:
1. Declara un array con los nombres de 5 frutas.
2. Muestra la primera y la última fruta.
3. Añade una fruta nueva al final del array.
4. Recorre el array con un foreach y muestra todas las frutas separadas por
comas.
*/

$frutas = ["Manzana", "Naranja", "Plátano", "Uva", "Pera"];

// Primera y última
echo "Primera: " . $frutas[0] . "<br>";
echo "Última: " . $frutas[count($frutas)-1] . "<br>";

// Añadir una fruta nueva
$frutas[] = "Sandía";

// Recorrer el array
echo "Lista de frutas: ";
foreach ($frutas as $f) {
    echo $f . ", ";
}
?>
