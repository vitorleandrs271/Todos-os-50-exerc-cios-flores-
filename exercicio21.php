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

Descritivo: Array Heterogêneo (Associativo): Crie um array associativo para armazenar os dados de um aluno (nome, idade, curso).

**************************/

$aluno = [
    "nome"  => "Flores",
    "idade" => 30,
    "curso" => "Linguagem e Técnicas de Programação em ADS"
];

foreach ($aluno as $campo => $valor) {
    echo ucfirst($campo) . ": " . $valor . "<br>";
}
?>