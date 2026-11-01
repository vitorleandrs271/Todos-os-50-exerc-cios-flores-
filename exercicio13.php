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

Descritivo: DO-WHILE: Faça um programa que solicite uma senha ao usuário. O programa só deve continuar quando a senha correta ("1234") for digitada.

**************************/

/*
O programa utiliza a estrutura de repetição DO-WHILE
para solicitar uma senha ao usuário.

A função fgets(STDIN) recebe a senha digitada no
terminal e trim() remove a quebra de linha.

Se a senha for diferente de 1234, o programa
mostra uma mensagem de erro e solicita novamente.

A repetição termina quando o usuário digita
a senha correta, mostrando acesso permitido.
*/

do {
    echo "Digite a senha: ";
    $senha = trim(fgets(STDIN));

    if ($senha != "1234") {
        echo "Senha incorreta! Tente novamente.\n";
    }

} while ($senha != "1234");

echo "Senha correta! Acesso permitido.\n";

?>
