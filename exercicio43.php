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

Descritivo: Função: Elabore uma função converterParaMaiusculas que receba uma string e a retorne em letras maiúsculas.

**************************/

/*
Explicação
A função converterParaMaiusculas recebe um texto e devolve ele em
maiúsculas com return. Foi usada mb_strtoupper() no lugar de
strtoupper() porque ela trata letras com acento, como "ã" e "é".
*/

function converterParaMaiusculas(string $texto): string
{
    return mb_strtoupper($texto, "UTF-8");
}

echo converterParaMaiusculas("programação em php") . PHP_EOL;
