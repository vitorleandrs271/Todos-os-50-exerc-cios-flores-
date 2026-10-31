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

Data: 31 de Setembro de 2026

Descritivo: WHILE: Crie um programa que peça ao usuário para adivinhar um número (ex: 7) e continue pedindo até que ele acerte
**************************/


$n = 7;
$i = 0;

while( $i != $n ) {
    $i = readline("Adivinhe qual é o número secreto : ");
}

echo "Parabens você acertou!!!!!!!";

/***
 Programa pede para usuário digitar um numero e enquanto não for igual a 7 ele continua pedindo
 */

?>