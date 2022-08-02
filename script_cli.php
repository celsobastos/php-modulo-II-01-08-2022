<?php

echo <<<MESSAGE
hello world  Seja Bem vindo      
----------------------------- \n
MESSAGE;

$execucao = explode('=', $argv[1]) ?? '';

function add($nome) {
    echo "Salvando Aluno ($nome) no banco de dados" . "\n";
    echo "Por favor aguarde..." . "\n";
    sleep(3);
}

if ($execucao[0] === '--save') {

     if (!isset($execucao[1])) {
        while(true) {
            echo 'Digite o nome do aluno que deseja inserir no banco:';
            $nome_do_aluno = fgets(STDIN);
            // ASCII = A = 65 
            $break = ord($nome_do_aluno);
            if ($break == 65) {
                break;
            }
            saveAluno($nome_do_aluno);
        }

     }   
    saveAluno($execucao[1]);
    echo "Aluno $execucao[1] Salvo com sucesso! \n";
}
