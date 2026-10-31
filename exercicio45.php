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

Descritivo: Função com Array: Crie uma função obterPrimeiroElemento que receba um array e retorne seu primeiro elemento
**************************/

function obterPrimeiroElemento(){
    $n = [];


    for ($i=1; $i <= 5; $i++) {
        $n[$i] = readline("Digite o ". $i. " numero: "); 

	}
	return $n[0];


}

obterPrimeiroElemento();


