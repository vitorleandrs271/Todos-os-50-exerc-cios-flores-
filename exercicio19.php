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

Descritivo: FOREACH: Usando o array de números do exercício 17, calcule e imprima a soma de todos os números com foreach.

**************************/

/*
O programa usa o mesmo array de 10 números inteiros
do exercício 17.

A variável soma começa com o valor zero.

A estrutura FOREACH percorre todos os elementos
do array e adiciona cada número à variável soma.

Ao final, o programa imprime a soma total.
*/

$numeros = [5, 12, 8, 21, 3, 17, 40, 9, 26, 14];

$soma = 0;

foreach ($numeros as $numero) {
    $soma += $numero;
}

echo "A soma dos números é: " . $soma . "\n";

?>
