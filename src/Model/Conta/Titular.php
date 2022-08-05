<?php

namespace Impacta\Banco\Model\Conta;

use Impacta\Banco\Model\Pessoa\Pessoa;
use Impacta\Banco\Model\Interface\AutenticarInterface;

class Titular extends Pessoa implements AutenticarInterface{

    final public function autenticar(string $login, string $senha): bool {
        
        $login_banco = 'sergio@bancoimpacta.com';
        $senha_banco = '1234';
        if($login_banco === $login && $senha_banco === $senha) {
            echo "$this->getNome(), Autenticado com sucesso";
        }

        throw new \Exception("Ops! $this->getNome(), Autenticação Falhou");
    }
}