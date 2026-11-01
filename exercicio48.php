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

Descritivo: Função: Escreva uma função fatorial que receba um número e retorne seu fatorial.

**************************/

/*
Explicação
O fatorial de n é n x (n-1) x ... x 1. A função começa com $resultado
igual a 1 e usa um for de 2 até n, multiplicando a cada volta. O
fatorial de 0 e de 1 é 1, e o código já cobre isso porque o laço nem
chega a rodar nesses casos.
*/

function fatorial(int $n): int
{
    $resultado = 1;

    for ($i = 2; $i <= $n; $i++) {
        $resultado *= $i;
    }

    return $resultado;
}

echo "Fatorial de 5 é " . fatorial(5) . PHP_EOL;
echo "Fatorial de 0 é " . fatorial(0) . PHP_EOL;
