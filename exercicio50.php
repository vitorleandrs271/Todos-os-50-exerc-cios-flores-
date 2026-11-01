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

Descritivo: Função: Crie uma função inverterString que receba uma string e a retorne invertida, sem usar a função strrev().

**************************/

/*
O programa cria uma função chamada inverterString
que recebe um texto como parâmetro.

A função utiliza um laço FOR para percorrer
o texto de trás para frente, começando pela
última letra até chegar à primeira.

Cada letra é adicionada a uma nova variável.
Ao final, a função retorna o texto invertido
e o programa imprime o resultado.
*/

function inverterString($texto) {
    $invertida = "";

    for ($i = strlen($texto) - 1; $i >= 0; $i--) {
        $invertida .= $texto[$i];
    }

    return $invertida;
}

$palavra = "BRENDA";

$resultado = inverterString($palavra);

echo "Palavra original: " . $palavra . "\n";
echo "Palavra invertida: " . $resultado . "\n";

?>
