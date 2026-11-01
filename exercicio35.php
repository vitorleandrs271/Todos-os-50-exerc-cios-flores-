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

Descritivo: Procedimento com Array: Crie um procedimento imprimirArray que receba um array e imprima todos os seus elementos.

**************************/

/*
O programa cria um procedimento chamado imprimirArray
que recebe um array como parâmetro.

A estrutura FOREACH percorre todos os elementos
do array e imprime cada um em uma nova linha.

O procedimento é chamado após a criação do array.
*/

function imprimirArray($numeros) {
    foreach ($numeros as $numero) {
        echo $numero . "\n";
    }
}

$numeros = [10, 20, 30, 40, 50];

imprimirArray($numeros);

?>
