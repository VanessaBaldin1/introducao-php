<?php
/*Condicionais: se, então, senão, fim-se  */

/* Protótipo  de Chatbot  */

echo "\n*** Chatbot da empresa Biribinha Tecnologia ***\n";
echo "\nOpções disponíveis: \n\n";
echo "1 -> Informações\n";
echo "2 -> Reclamações\n";
echo "3 -> Elogios\n";
echo "4 -> Status\n";
echo "\n";

$opcao = readline("Digite uma opção: ");

//teste de entrada
//echo "\n".$opcao;

//Condicional Encadeada
if($opcao == 1){
	$acao = "\nLegal, O que deseja saber? 😁";
}elseif($opcao == 2){
	$acao = "\nPuxa, que pena... O que houve? 😒";	
}elseif($opcao == 3){
	$acao = "\nBacana!, Pode falar ❤️";	
}elseif($opcao == 4){
	$acao = "\nOk, um momento...⌛";	
} else {
 $acao = "\nNão entendi... 🤔 vou chamar um atendente.";
 }
 
 
 echo "\n----------------------------\n";
 echo $acao;
 echo "\n----------------------------\n";