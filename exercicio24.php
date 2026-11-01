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

Descritivo: FOREACH Aninhado: Usando o array de produtos do exercício 23, imprima o nome e o preço de cada produto.

**************************/

$produtos = [
    ["nome" => "Teclado", "preço" => 120.50],
    ["nome" => "Mouse",   "preço" => 59.90],
    ["nome" => "Monitor", "preço" => 899.00],
];

foreach ($produtos as $produto) {
    foreach ($produto as $campo => $valor) {
        if ($campo == "preço") {
            $valor = "R$ " . number_format($valor, 2, ",", ".");
        }
        echo ucfirst($campo) . ": " . $valor . "\n";
    }
    echo "\n";
}

/* O array $produtos é o mesmo do exercício 23: cada produto é um array
   associativo com "nome" e "preço". O primeiro foreach passa por cada produto
   e o segundo foreach (aninhado) passa por cada campo desse produto,
   imprimindo "campo: valor". O preço é formatado no padrão R$ 0,00. */

?>
