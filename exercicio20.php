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

Descritivo: Array/FOR: Crie um array com os 7 dias da semana e imprima-os usando um laço for.

**************************/

/*
Explicação
O array $dias guarda os 7 nomes. O for começa em 0, que é a primeira
posição do array, e vai até count($dias) - 1. A cada volta, o código
imprime o item da posição $i. Usar count() evita fixar o número 7 no laço.
*/

$dias = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];

for ($i = 0; $i < count($dias); $i++) {
    echo $dias[$i] . PHP_EOL;
}
