<?php

/**************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ADS2A
Componentes:
26014141-2 - Brenda Isabela
 26004109-2 - Gustavo Souza Rosevics
 26009642-2 - Joao Victor de Souza 
 26007377-2   Bruno Santian
 26010196-2 - Vitor Leandro 
Data: 23 de Setembro de 2026
Descritivo: Função: Crie uma função maiorNumero que receba dois números e retorne o maior entre eles.

Cria a função maiorNumero que recebe dois números e retorna o maior.
*************************/
function maiorNumero($num1, $num2) {
    if ($num1 > $num2) {
        return $num1;
    } elseif ($num2 > $num1) {
        return $num2;
    } else {
        return "Os números são iguais.";
    }
}   
$num1 = (float) readline("Digite o primeiro número: ");
$num2 = (float) readline("Digite o segundo número: ");

$resultado = maiorNumero($num1, $num2);

if (is_string($resultado)) {
    echo $resultado . "\n";
} else {
    echo "O maior número é: $resultado\n";
}
?>  