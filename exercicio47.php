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
Descritivo: Função com String: Crie uma função contarVogais que receba uma string e retorne o número de vogais.

Cria a função contarVogais que recebe uma string e retorna a quantidade de vogais.
*************************/
function contarVogais($string) {
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $contador = 0;
    
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array(strtolower($string[$i]), $vogais)) {
            $contador++;
        }
    }
    
    return $contador;
}
$palavra = readline("Digite uma palavra: ");

echo "Quantidade de vogais: " . contarVogais($palavra) . "\n";
?>