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

Descritivo: Função: Elabore uma função ehPrimo que receba um número e retorne true se ele for primo e false caso contrário.

**************************/

function ehPrimo($numero) {
    if ($numero < 2) {
        return false;
    }
    for ($i = 2; $i * $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

$numero = (int) readline("Digite um número: ");

if (ehPrimo($numero)) {
    echo "$numero é primo.\n";
} else {
    echo "$numero não é primo.\n";
}

/* A função ehPrimo recebe um número e retorna true ou false. Números menores
   que 2 não são primos. O for testa os divisores de 2 até a raiz do número:
   se algum dividir sem resto, retorna false; se nenhum dividir, retorna true. */

?>
