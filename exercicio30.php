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

Descritivo: Array Multidimensional: Crie uma matriz 3x3 (array de arrays) e preencha-a com números. Imprima o elemento da segunda linha e terceira coluna.

**************************/

/*
Explicação
A matriz é um array com 3 arrays dentro, um para cada linha. Os índices
do PHP começam em 0, então a segunda linha é o índice 1 e a terceira
coluna é o índice 2. Por isso o elemento pedido está em $matriz[1][2].
*/

$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

echo "Elemento da segunda linha e terceira coluna é " . $matriz[1][2] . PHP_EOL;
