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

Descritivo: Função: Crie uma função maiorNumero que receba dois números e retorne o maior entre eles.

**************************/

function maiorNumero($a, $b) {
    if ($a > $b) {
        return $a;
    }
    return $b;
}

echo "O maior é: " . maiorNumero(15, 27);
?>