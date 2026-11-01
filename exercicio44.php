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

Descritivo: Função: Escreva uma função calcularAreaRetangulo que receba a largura e a altura e retorne a área.

**************************/

/*
O programa cria uma função chamada calcularAreaRetangulo
que recebe a largura e a altura como parâmetros.

Dentro da função, a área é calculada multiplicando
a largura pela altura, e o resultado é devolvido
utilizando RETURN.

O usuário digita a largura e a altura, os valores são
enviados para a função e a área retornada é mostrada.
*/

function calcularAreaRetangulo($largura, $altura) {
    $area = $largura * $altura;
    return $area;
}

$largura = (float) readline("Digite a largura do retângulo: ");
$altura = (float) readline("Digite a altura do retângulo: ");

$area = calcularAreaRetangulo($largura, $altura);

echo "A área do retângulo é: " . $area . "\n";

?>
