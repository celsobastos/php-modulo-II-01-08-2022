<?php

namespace Impacta\Banco\PadroesProjeto\Strategy;
use Impacta\Banco\PadroesProjeto\Strategy\Funcionario;

class Servico {

    private Funcionario $funcionario;

    public function __construct(Funcionario $funcionario) {
        $this->funcionario = $funcionario;
    }

    public function calcularBonus() {
        $this->funcionario->applicarBonus();
    }

    public function report() {
        return $this->funcionario;
    }
}