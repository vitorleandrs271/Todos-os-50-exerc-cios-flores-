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

Descritivo: Array/Funções Nativas: Crie um array de números e use a função count() para mostrar quantos elementos ele possui.

**************************/

/*
Explicação
O array $numeros tem alguns valores inteiros. A função count() devolve
quantos elementos o array tem, e o resultado é guardado em $quantidade
para depois ser impresso.
*/

$numeros = [4, 8, 15, 16, 23, 42];

$quantidade = count($numeros);

echo "O array possui $quantidade elementos." . PHP_EOL;
