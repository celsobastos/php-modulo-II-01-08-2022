<?php

namespace Impacta\Banco\PadroesProjeto\Strategy;

class Atendente extends Funcionario {

    public function applicarBonus(): void {
        $this->salario = $this->salario * 1.15;
    }
} 