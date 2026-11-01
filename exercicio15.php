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

Descritivo: FOR/IF: Crie um programa para encontrar e imprimir todos os números primos entre 1 e 50.

**************************/

for ($n = 2; $n <= 50; $n++) {
    $primo = true;
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) {
            $primo = false;
            break;
        }
    }
    if ($primo) {
        echo $n . " ";
    }
}
?>