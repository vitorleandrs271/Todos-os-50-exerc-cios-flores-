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
Descritivo: 24.FOREACH Aninhado: Usando o array de produtos do exercício 23, imprima o nome e o preço de cada produto.

Percorre um array de produtos e imprime o nome e o preço de cada um (foreach).
*************************/
$produtos = array(
    array ("nome" => "Teclado", "preco" => 120.50),
    array ("nome" => "Mouse",   "preco" => 59.90),
    array ("nome" => "Monitor", "preco" => 899.00),
);

foreach ($produtos as $produto) {
    echo "Nome: " . $produto["nome"] . " - Preço: R$ " . $produto["preco"] . "<br>";
}



?>