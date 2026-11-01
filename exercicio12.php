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
Descritivo: 12.DO-WHILE: Crie um menu de opções (1. Iniciar, 2. Parar, 3. Sair) e use do-while para mostrar o menu até que o usuário escolha "Sair

Exibe um menu (Iniciar/Parar/Sair) e repete até o usuário escolher Sair (do-while).
*************************/

do {
    echo "Menu de opções:\n";
    echo "1. Iniciar\n";
    echo "2. Parar\n";
    echo "3. Sair\n";

    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            echo "Iniciando...\n";
            break;
        case 2:
            echo "Parando...\n";
            break;
        case 3:
            echo "Saindo...\n";
            break;
        default:
            echo "Opção inválida. Tente novamente.\n";
    }

} while ($opcao != 3);

?>