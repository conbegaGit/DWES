<?php
/*
Crea un script en PHP que muestre:
1. La fecha actual en formato día/mes/año .
2. La hora actual en formato HH:MM:SS .
3. Qué día de la semana es hoy (ejemplo: Lunes, Martes, etc.).
*/


date_default_timezone_set("Europe/Madrid");

echo "Hoy es " . date("d/m/Y") . "<br>";
echo "La hora actual es " . date("H:i:s") . "<br>";

$dias = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
echo "Hoy es " . $dias[date("w")];
?>
