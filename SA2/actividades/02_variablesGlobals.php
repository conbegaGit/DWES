<?php
/*

1.Declara una variable global $ciudad = "Valencia".
2.Usando $GLOBALS, crea otra variable llamada $pais con el valor "España".
3.Muestra en pantalla ambas variables ($ciudad y $pais) de dos maneras:
    Accediendo directamente con el nombre de la variable.
    Accediendo desde el array $GLOBALS.
Pista: recuerda que $GLOBALS es un array y se accede con corchetes y comillas.
*/
// 1. Variable normal
$ciudad = "Valencia";

// 2. Definición mediante $GLOBALS
$GLOBALS["pais"] = "España";

// 3. Mostrar resultados
echo "Ciudad: " . $ciudad . "<br>";        // Valencia
echo "País: " . $pais . "<br>";            // España

echo "Ciudad desde \$GLOBALS: " . $GLOBALS["ciudad"] . "<br>";
echo "País desde \$GLOBALS: " . $GLOBALS["pais"] . "<br>";
?>
