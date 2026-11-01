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

Descritivo: Função: Faça uma função gerarArrayPares que receba um número n e retorne um array com todos os números pares de 0 até n.

**************************/

/*
Explicação
A função cria um array vazio e usa um for que começa em 0 e anda de 2
em 2 até n. Cada valor entra no array com $pares[] = $i. No final, a
função retorna o array. O código de teste usa implode() para imprimir
os valores separados por vírgula.
*/

function gerarArrayPares(int $n): array
{
    $pares = [];

    for ($i = 0; $i <= $n; $i += 2) {
        $pares[] = $i;
    }

    return $pares;
}

$resultado = gerarArrayPares(20);
echo implode(", ", $resultado) . PHP_EOL;
