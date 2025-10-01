<?php
/*
Muestra en PHP:
1.La fecha actual en formato Miércoles, 18 de Septiembre de 2025.
2.Cuántos días faltan para que acabe el año.
*/

// Establecer la zona horaria
date_default_timezone_set("Europe/Madrid");

// Crear un formateador de fechas en español
$formatter = new IntlDateFormatter(
    'es_ES',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'Europe/Madrid',
    IntlDateFormatter::GREGORIAN,
    "EEEE, d 'de' MMMM 'de' y"
);

// Fecha actual formateada
$hoy = new DateTime();
$fecha_actual = $formatter->format($hoy);

// Calcular días que faltan para fin de año
$fin_de_anio = new DateTime($hoy->format("Y") . "-12-31");
$dias_restantes = $hoy->diff($fin_de_anio)->days;

// Mostrar resultados
echo "Fecha actual: " . ucfirst($fecha_actual) . "<br>";
echo "Días que faltan para fin de año: $dias_restantes";
?>
