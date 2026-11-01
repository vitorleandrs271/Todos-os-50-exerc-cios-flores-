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
Descritivo: 28.Array/Busca: Crie um array de frutas. Escreva um código que verifique se a fruta "Maçã" existe no array.

Cria um array de frutas e verifica se “Maçã” existe nele.
*************************/
$frutas = array("Banana", "Laranja", "Maçã", "Uva", "Pera");
$frutaBuscada = "Maçã";

if (in_array($frutaBuscada, $frutas)) {
    echo "A fruta '$frutaBuscada' existe no array.";
} else {
    echo "A fruta '$frutaBuscada' não existe no array.";
}

?>