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

Descritivo: Procedimento: Elabore um procedimento verificarParImpar que receba um número e imprima se ele é "Par" ou "Ímpar".

**************************/

/*
Explicação
O procedimento verificarParImpar não retorna nada, só imprime. Ele usa o
operador % (resto da divisão). Se o resto da divisão por 2 for 0, o
número é par. Caso contrário, é ímpar.
*/

function verificarParImpar(int $numero): void
{
    if ($numero % 2 == 0) {
        echo "$numero é Par" . PHP_EOL;
    } else {
        echo "$numero é Ímpar" . PHP_EOL;
    }
}

verificarParImpar(8);
verificarParImpar(7);
