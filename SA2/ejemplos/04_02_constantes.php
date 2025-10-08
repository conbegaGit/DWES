<?php

/*
1.Son variables cuyo valor no varían. 
2.Se declaran siempre en MAYÚSCULAS

Existen dos posibilidades: define y const.
*/

define("PI", 3.1416);
const IVA = 0.21;

echo PI, " ", IVA;// ojo!! No se pone el símbolo dolar

/*
Hay un conjunto de constantes ya predefinidas, también conocidas como magic constants:
https://www.php.net/manual/es/reserved.constants.php
*/

// Ejemplo: definir una constante basada en el entorno
if (getenv('ENTORNO') === 'produccion') {
    define('DEBUG_MODE', false);
} else {
    define('DEBUG_MODE', true);
}

class MiClase {
    // Correcto: constante de clase
    const TIPO_USUARIO = 'Admin';

    // ¡ERROR! No puedes usar define() aquí.
    // define('OTRA_COSA', 'valor');
}

/*
Esta es la diferencia más técnica pero fundamental:

    const (compilación): El valor de la constante se establece cuando PHP "lee" el código por primera vez, 
    antes de ejecutarlo. Por eso, no puedes usar const dentro de una estructura de control como un if, 
    porque PHP necesita saber su valor de antemano.

    define() (ejecución): El valor se establece cuando el flujo del programa llega a la línea define(). 
    Esto te permite crear constantes de forma dinámica.
*/
?>