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

Descritivo: FOR: Crie um programa que calcule e imprima a soma dos números de 1 a 100.

**************************/

$soma = 0;

for ($i = 1; $i <= 100; $i++) {
    $soma += $i;
}

echo "A soma dos números de 1 a 100 é: " . $soma . "\n";

/* A variável $soma começa em 0. O for passa por todos os números de 1 a 100
   e, a cada volta, soma o número atual em $soma. No final, mostra o total. */

?>
