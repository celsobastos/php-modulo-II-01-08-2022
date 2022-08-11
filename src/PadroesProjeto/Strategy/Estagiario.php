<?php

namespace Impacta\Banco\PadroesProjeto\Strategy;

class Estagiario extends Funcionario {

    public function applicarBonus(): void {
        $this->salario = $this->salario * 1.10;
    }
} 