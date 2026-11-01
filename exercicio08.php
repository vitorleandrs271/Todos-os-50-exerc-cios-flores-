<?php

/**************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ADS2A

Componentes:
 26014141-2 - Brenda Isabela
 26007377-2 - Bruno Santian
 26004109-2 - Gustavo Souza Rosevics
 26009642-2 - Joao Victor de Souza
 26010196-2 - Vitor Leandro

Data: 23 de Setembro de 2026

Descritivo: WHILE: Faça um programa que imprima os múltiplos de 3, de 3 a 30.

**************************/

/*
O programa utiliza a estrutura de repetição WHILE.
A variável começa com o valor 3 e aumenta de
3 em 3 a cada repetição, imprimindo os
múltiplos de 3 até chegar ao número 30.
*/

$numero = 3;

while ($numero <= 30) {
    echo $numero . "\n";
    $numero += 3;
}

?>
