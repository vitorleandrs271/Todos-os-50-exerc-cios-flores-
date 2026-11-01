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
Descritivo: 33.Procedimento: Crie um procedimento mostrarTabuada que receba um número e imprima sua tabuada de 1 a 10.

Cria o procedimento mostrarTabuada que recebe um número e imprime a tabuada de 1 a 10.
*************************/
$n = (int) readline("Digite um número: ");
mostrarTabuada($n);
function mostrarTabuada(int $numero): void
{
    echo "Tabuada do $numero\n";
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "\n";
    }
}
?>