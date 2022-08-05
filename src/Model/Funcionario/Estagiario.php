<?php

namespace Impacta\Banco\Model\Funcionario;

class Estagiario extends Funcionario {

    public function calculaBonificacao(): float {
        return $this->salario * 0.05;
    }
}