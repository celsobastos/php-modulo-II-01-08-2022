<?php

namespace Impacta\Banco\Services;
use Impacta\Banco\Model\Funcionario\Funcionario;


class ProcessoBonificacao {

    private float $totalBonificacao = 0;
    private Funcionario $funcionario;

    public function calcBocinicacao(Funcionario $funcionario) {
        $this->funcionario = $funcionario;
        $this->totalBonificacao += $funcionario->calculaBonificacao();
    }

    public function getTotalBonificacao() {
        return $this->totalBonificacao;
    }

    public function __toString() {
        $nome = $this->funcionario->getNome();
        $salario = $this->funcionario->getSalario();
        $total = $this->totalBonificacao + $salario; 
        return <<<OUT
           Funcionario: $nome
           Salario Base: $salario
           Salario + Bonificação: $total
           ------------------------------------
        OUT;
    }
}