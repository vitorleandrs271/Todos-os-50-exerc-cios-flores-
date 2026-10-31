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

Descritivo: Array Associativo/FOREACH: Usando o array do exercício 21, imprima cada dado no formato "chave: valor"

**************************/


$aluno = [
    "nome"  => "Flores",
    "idade" => 30,
    "curso" => "Linguagem e Técnicas de Programação em ADS"
];

foreach ($aluno as $chave => $valor) {
    echo $chave. " : " . $valor ."\n";
}

/* Exibe a chave do array e o valor dela **/

?> 
