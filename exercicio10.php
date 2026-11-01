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

Descritivo: WHILE: Crie um programa que conte quantos dígitos tem um número inteiro fornecido pelo usuário.

**************************/

$numero = abs((int) readline("Digite um número inteiro: "));
$original = $numero;
$digitos = 0;

if ($numero == 0) {
    $digitos = 1;
}

while ($numero > 0) {
    $numero = intdiv($numero, 10);
    $digitos++;
}

echo "O número $original tem $digitos dígito(s).\n";

/* O usuário digita um número. O abs() tira o sinal de negativo. O while divide
   o número por 10 (divisão inteira) até ele chegar a 0, e cada divisão conta
   um dígito. Se o número digitado for 0, ele tem 1 dígito. */

?>
