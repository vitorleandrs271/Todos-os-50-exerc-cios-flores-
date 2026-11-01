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

Descritivo: Procedimento: Faça um procedimento que receba um array associativo de um carro (marca, modelo, ano) e imprima seus dados.

**************************/

/*
Explicação
O procedimento imprimirCarro recebe um array associativo com as chaves
"marca", "modelo" e "ano" e imprime cada dado em uma linha. Não há
retorno. No final, o código cria um carro de exemplo e chama o
procedimento.
*/

function imprimirCarro(array $carro): void
{
    echo "Marca: " . $carro["marca"] . PHP_EOL;
    echo "Modelo: " . $carro["modelo"] . PHP_EOL;
    echo "Ano: " . $carro["ano"] . PHP_EOL;
}

$meuCarro = [
    "marca"  => "Volkswagen",
    "modelo" => "Gol",
    "ano"    => 2018,
];

imprimirCarro($meuCarro);
