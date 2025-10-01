<?php
	$var1 = 100; 
	$var3 = 100 + $var2; // $var2 no existe, así que se toma como 0. El valor por defecto para un entero es 0
	echo "$var3 <br>";   // muestra 100
	$var3 = 100 * $var2; // $var2 no existe, así que se toma como 0
	echo "$var3 <br>";   // muestra 0