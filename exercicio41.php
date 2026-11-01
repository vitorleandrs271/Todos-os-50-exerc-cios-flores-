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

Descritivo: Função: Crie uma função chamada somar que receba dois números e retorne a soma deles.

**************************/

/*
O programa cria uma função chamada somar que
recebe dois números como parâmetros.

Dentro da função, os números são somados e
o resultado é devolvido utilizando RETURN.

Ao final, a função é chamada com dois valores
e o resultado da soma é mostrado com ECHO.
*/

function somar($numero1, $numero2) {
    $resultado = $numero1 + $numero2;
    return $resultado;
}

$soma = somar(10, 20);

echo "A soma dos números é: " . $soma . "\n";

?>
