<?php

namespace Impacta\Banco\Model\Funcionario;

use Impacta\Banco\Model\Pessoa\ {
    Pessoa,
    Cpf
};

/**
 * Classe Funcionario
 */
abstract class Funcionario extends Pessoa {
    /**
     * Salario do Funcionário.
     */
    private float $salario;

    /**
     * Metodo construtor
     * 
     * @param string $nome
     *   Set o nome do funcionario
     * @param Cpf $cpf
     *   Set o CPF do foncionário
     * @param string $data_nascimento
     *   Set o data de nascimento do foncionário 
     */
    public function __construct(
        string $nome,
        string $endereco,
        Cpf $cpf,
        string $data_nascimento,
        float $salario,
    ) {
        parent::__construct($nome, $endereco, $cpf, $data_nascimento);
        $this->salario = $salario;
    }

    /**
     * Todas as classes que estender esta classe precisa desenvolver
     * esta implementação
     */
    abstract public function calculaBonificacao(): float;

    /**
     * Resupera o Salário do Funcionaário.
     * 
     * @return float
     *   O salário do Funcionário.
     */
    public function getSalario(): float {
        return $this->salario;
    }

}