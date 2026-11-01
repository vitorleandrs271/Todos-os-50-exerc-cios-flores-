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

Descritivo: Procedimento com Múltiplos Parâmetros: Crie um procedimento mostrarDados que receba nome, idade e cidade e os imprima de forma organizada.

**************************/

/*
O programa cria um procedimento chamado mostrarDados
que recebe três parâmetros: nome, idade e cidade.

O procedimento utiliza o comando ECHO para
imprimir as informações de forma organizada.

Ao final, o procedimento é chamado com os dados
de exemplo, exibindo as informações na tela.
*/

function mostrarDados($nome, $idade, $cidade) {
    echo "Nome: " . $nome . "\n";
    echo "Idade: " . $idade . "\n";
    echo "Cidade: " . $cidade . "\n";
}

mostrarDados("Brenda", 20, "Curitiba");

?>
