<?php

/*
Antes de ejecutar, vamos a configurar el php.ini para que podamos ver los 
mensajes de error.
1. Abrir el fichero php.ini
2. Buscar la variable display_errors y ponerla a ON
3. Buscar la variable error_reporting para ver en que modo está
*/

	$var1 = 100; 
	$var3 = 100 + $var2; // $var2 no existe, así que se toma como 0. El valor por defecto para un entero es 0
	echo "$var3 <br>";   // muestra 100
	$var3 = 100 * $var2; // $var2 no existe, así que se toma como 0
	echo "$var3 <br>";   // muestra 0