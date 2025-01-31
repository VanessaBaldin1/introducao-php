<?php
//Entrada de dados (direta, atribuido)
$curso = readline("Informe o curso: ");
$cargaHoraria = readline ("Informe a carga horaria: ");

//Processamento
$faltasPermitidas = $cargaHoraria * 0.25;

//Saída
//echo "O " .$curso, " tem a " .$cargaHoraria, " com limite de " .$faltasPermitidas;

//Saída concatenada por partes
echo "\nCurso: " .$curso;
echo "\nCarga Horária: ".$cargaHoraria. "h";
echo "\nLimite de faltas: ".$faltasPermitidas. "h";

//\n é usado para criar "quebras", ou "novas linhas" dentro de uma saída de texto.