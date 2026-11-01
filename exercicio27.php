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

Descritivo: Array Associativo: Crie um array com as notas de um aluno em 4 disciplinas e calcule a média.

**************************/

$notas = [
    "Matemática" => 8.0,
    "Português"  => 7.5,
    "História"   => 6.0,
    "Programação" => 9.5
];

$media = array_sum($notas) / count($notas);

foreach ($notas as $disciplina => $nota) {
    echo "$disciplina: $nota<br>";
}
echo "Média: " . number_format($media, 2, ',', '.');
?>