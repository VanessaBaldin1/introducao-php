<?php
/* Loop DO/WHILE (semelhante ao repita)  */

$contador = 1;

do {
	$numero = readline("Informe número: ");
	$resultado = $numero * 3;
	
	echo "\n".$resultado."\n";
	
	$contador++;
	
	
}while($contador <= 3);