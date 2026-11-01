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

Descritivo: FOREACH/IF: Dado um array de números [12, 5, 23, 18, 9, 45], imprima apenas os números maiores que 20.

**************************/

/*
O programa cria um array com os números informados
no enunciado do exercício.

A estrutura FOREACH percorre todos os elementos
do array, verificando cada número.

A estrutura IF verifica se o número é maior que 20.
Se a condição for verdadeira, o número é impresso.
*/

$numeros = [12, 5, 23, 18, 9, 45];

foreach ($numeros as $numero) {
    if ($numero > 20) {
        echo $numero . "\n";
    }
}

?>
