<?php 

namespace Impacta\Banco\Model\Funcionario;
use Impacta\Banco\Model\Interface\AutenticarInterface;

final class Diretor extends Funcionario implements AutenticarInterface {

    use \Impacta\Banco\Model\Helper\CalculadoraTrait;

    final public function calculaBonificacao(): float {
        return $this->getSalario() *  0.2; 
    }

    final public function autenticar(string $login, string $senha): bool {
        
        $login_banco = 'amanda@bancoimpacta.com';
        $senha_banco = '123';
        if($login_banco === $login && $senha_banco === $senha) {
            echo "$this->getNome(), Autenticado com sucesso";
        }

        throw new \Exception("Ops! $this->getNome(), Autenticação Falhou");
    }

    /**
     * Usa calculadora
     */
    public function calculoGeral() {
        echo $this->calculadora(2,5);
    }
}