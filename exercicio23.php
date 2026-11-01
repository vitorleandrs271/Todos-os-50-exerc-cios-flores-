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

Descritivo: Array Associativo: Crie um array de produtos, onde cada produto é um array associativo com "nome" e "preço".

**************************/

/*
Explicação
$produtos é um array onde cada posição é outro array associativo com as
chaves "nome" e "preço". O enunciado pede só a criação. Para mostrar que
a estrutura funciona, o foreach no final imprime cada produto.
*/

$produtos = [
    ["nome" => "Teclado", "preço" => 120.50],
    ["nome" => "Mouse",   "preço" => 59.90],
    ["nome" => "Monitor", "preço" => 899.00],
];

foreach ($produtos as $produto) {
    echo $produto["nome"] . " - R$ " . number_format($produto["preço"], 2, ",", ".") . PHP_EOL;
}
