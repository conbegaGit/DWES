<?php
// Obtener la fecha y hora actuales:

date_default_timezone_set('Europe/Madrid');

// Muestra la fecha actual en formato Año-Mes-Día
echo date("d-m-Y") . "<br>"; // Ejemplo de salida: 2025-10-02

// Muestra la fecha y hora actuales
echo date("Y-m-d H:i:s") . "<br>"; // Ejemplo de salida: 2025-10-02 19:38:54

// Un formato más legible para el usuario en español
echo "Hoy es " . date("l, j \d\e F \d\e Y") . "<br>"; // Ejemplo de salida: Hoy es Thursday, 2 de October de 2025


// Script para mostrar una fecha específica en un formato español personalizado.

// 1. Crear un objeto DateTime para la fecha deseada.
// En este caso, el 13 de Abril de 2011.
$fecha = new DateTime();

// 2. Crear un formateador de fecha internacional (IntlDateFormatter).
// 'es_ES' especifica el localismo para español de España.
// El último parámetro es el patrón de formato personalizado.
// - EEEE: Nombre completo del día de la semana.
// - d:    Día del mes.
// - LLLL: Nombre completo del mes (en su forma nominativa).
// - y:    Año.
// - 'de': Se trata como texto literal al ir entre comillas simples.
$formateador = new IntlDateFormatter(
    'es_ES',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'Europe/Madrid',
    IntlDateFormatter::GREGORIAN,
    "EEEE, d 'de' LLLL 'de' y"
);
EPOCT15
// 3. Usar el formateador para obtener la cadena de fecha y mostrarla.
echo $formateador->format($fecha);

// Salida esperada:
// Miércoles, 13 de abril de 2011
// (Nota: la capitalización de "Abril" puede variar según la configuración del localismo del servidor,
// pero 'abril' en minúscula es lo gramaticalmente correcto en español).

