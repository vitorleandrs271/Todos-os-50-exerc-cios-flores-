<?php

/**************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ADS2A
Componentes:
 26014141-2 - Brenda Isabela
 26004109-2 - Gustavo Souza Rosevics
 26009642-2 - Joao Victor de Souza 
 26007377-2   Bruno Santian
 26010196-2 - Vitor Leandro
Data: 23 de Setembro de 2026
Descritivo: 9.WHILE: Escreva um programa que leia números do usuário até que ele digite 0 e, no final, mostre a soma de todos os números digitados.

Lê números do usuário até digitar 0 e mostra a soma total (laço while).
*************************/
$soma = 0; 
while (true) {
    $numero = readline("Digite um número (ou 0 para sair): ");
    if ($numero == 0) {
        break;
    }
    $soma += $numero;
}
echo "A soma dos números digitados é: " . $soma;

?>