<?php

//Declarando um vetor (ARRAY) VAZIO
$pessoas = []; //OU $pessoas = array ();

//Processamento de atribuição de dados
$pessoas[0] = "Jon Oliva";
$pessoas[1] = "David Gilmour";
$pessoas[2] = "Ozzy Osbourne";

//Saída de dados
echo "\nPrimeira pessoa: ".$pessoas[0];
echo "\nSegunda pessoa: ".$pessoas[1];
echo "\nTerceira pessoa: ".$pessoas[2];

echo "\n";

//echo $pessoas[3]; //Gera um Warning, alertando de algo inconsistente 