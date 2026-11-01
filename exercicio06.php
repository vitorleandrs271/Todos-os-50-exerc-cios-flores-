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

Descritivo: WHILE: Escreva um programa que use while para imprimir os números de 1 a 10.

**************************/

/*
O programa utiliza a estrutura de repetição WHILE,
começando pelo número 1 e repetindo enquanto o
número for menor ou igual a 10.
A cada repetição, o número aumenta em 1.
*/

$numero = 1;

while ($numero <= 10) {
    echo $numero . "\n";
    $numero++;
}

?>
