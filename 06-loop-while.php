<?php
/* Loop WHILE (Enquanto) */

/* Exemplo 1: contagem de 1 até 10 */

//$i = 1; //variavel de controle da iteração/repetição

//while ($i <= 10){
	//echo $i."\n";
	//$i = $i + 1;
	//$i++; //operador de incremento ++
	


echo "\n\n";

//Exemplo 2: obter e exibir nome e idade de 3 pessoas

$contador = 1;

while ($contador <=3 ){
	
	//Entradas
	$nome = readline ("Qual o seu nome? ");
	$idade = readline ("Qual a sua idade? ");

	//Saídas
	echo"\n";
	echo $nome. "tem " .$idade. " anos.\n\n";
	
	$contador++;
}