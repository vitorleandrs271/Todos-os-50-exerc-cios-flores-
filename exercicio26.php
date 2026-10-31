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

Descritivo: Array/Funções Nativas: Dado o array [10, 2, 5, 8, 1], ordene-o em ordem crescente usando sort()

**************************/

$n = [10, 2, 5, 8, 1];

sort($n);

foreach ($n as $numeros) {
    echo $numeros ."\n";
}

/** Exibe os dados em maneira crescente */

?>