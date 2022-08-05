<?php 

namespace Impacta\Banco\Model\Funcionario;

use Impacta\Banco\Model\Interface\AutenticarInterface;

final class Gerente extends Funcionario implements AutenticarInterface {
    final public function calculaBonificacao(): float {
        return $this->getSalario() *  0.1; 
    }

    final public function autenticar(string $login, string $senha) {
        
        $login_banco = 'paulo@bancoimpacta.com';
        $senha_banco = '123456';
        if($login_banco === $login && $senha_banco === $senha) {
            echo "$this->getNome(), Autenticado com sucesso";
        }

        throw new \Exception("Ops! $this->getNome(), Autenticação Falhou");
    }
}