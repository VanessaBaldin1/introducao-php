<?php
//Entradas (direta, atribuido)
$produto = readline("Informe o produto: ");
$precoInicial = readline("Preço inicial: ");
$desconto =  readline("Desconto em reais: ");

//Processamento
$precoFinal = $precoInicial - $desconto;

//Saída concatenada [o preço final é: valor]
echo "O preço final é: " .$precoFinal;