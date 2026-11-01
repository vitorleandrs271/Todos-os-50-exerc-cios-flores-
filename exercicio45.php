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

Descritivo: Função com Array: Crie uma função obterPrimeiroElemento que receba um array e retorne seu primeiro elemento.

**************************/

function obterPrimeiroElemento($array) {
    return $array[0];
}

$numeros = [];

for ($i = 1; $i <= 5; $i++) {
    $numeros[] = readline("Digite o " . $i . " numero: ");
}

echo "Primeiro elemento registrado: " . obterPrimeiroElemento($numeros) . "\n";

/** O usuário digita 5 números, que são guardados no array $numeros.
    Depois o array é enviado para a função obterPrimeiroElemento, que recebe
    o array pelo parâmetro e retorna o elemento da posição 0 (o primeiro). */

?>
