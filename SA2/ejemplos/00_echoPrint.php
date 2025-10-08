<?php
/*
Existen varias formas incluir contenido en la página web a partir del resultado de la ejecución de
código PHP. 
1. Usando echo, que no devuelve nada (void), y genera como
salida el texto de los parámetros que recibe.
    void echo (string $arg1, ...);  

2. Usando print, que funciona de forma similar. La diferencia más importante entre print y
echo, es que print sólo puede recibir un parámetro y devuelve siempre 1.
    int print (string $arg);

Tanto print como echo no son realmente funciones, por lo que no es obligatorio que pongas
paréntesis cuando las utilices. Por ejemplo, el código del siguiente documento puede hacerse
igualmente utilizando echo.

*/
?>
<!doctype html>
<html lang="es">
<!-- DWES 25-26 -->
<!-- SA2 : Programación básica en Servidor. PHP -->
<!-- Ejemplo: Utilización de print y echo -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Desarrollo Web</title>
</head>
<body>
    <?php
    // Sin paréntesis (forma más habitual)
    echo "Hola, mundo";
    // Con paréntesis (también válido)
    echo ("Hola de nuevo");

    // Sin paréntesis
    print "Esto es con print";
    // Con paréntesis
    print("Y esto también");

    $variable = print "Hola"; // Válido, $variable ahora contiene 1
    // $otra_variable = echo "Adiós"; // Inválido, causaría un error de sintaxis

    // Válido con echo
    echo "Hola", " ", "Mundo"; // Imprime "Hola Mundo"

    // Inválido con print
    // print "Hola", " ", "Mundo"; // Esto generaría un error

    $modulo = "DWES";
    print "Primero con PRINT: <br>";
    print "<p>Módulo: ";
    print $modulo;
    print "</p>";

    echo "Ahora con ECHO: <br>";
    echo "<p>Módulo: ";
    echo $modulo;
    echo "</p>";
    ?>
</body>
</html>