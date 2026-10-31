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

Descritivo: Procedimento: Crie um procedimento contagemRegressiva que receba um número e imprima uma contagem regressiva a partir dele até 0.
**************************/


function contagemRegressiva() {
    $n = readline("Digite seu número: ");
    echo "\n";

    for ( $i = $n; $i >= 0; $i--) { 
        echo $i . "\n"; 
    }
    
}

contagemRegressiva();

/** exibe o numero que o usuário digitou de forma regressiva até 0 */