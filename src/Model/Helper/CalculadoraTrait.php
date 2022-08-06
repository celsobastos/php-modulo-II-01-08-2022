<?php

namespace Impacta\Banco\Model\Helper;

trait CalculadoraTrait {

    public function calculadora($n1, $n2): float {
        return $n1 + $n2;
    }
}