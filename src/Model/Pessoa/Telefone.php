<?php

namespace Impacta\Banco\Model\Pessoa;

class Telefone {

    private string $codigoArea;
    private string $numero;

    public function __construct(string $codigo_area, string $numero) {
        $this->codigoArea = $codigo_area;
        $this->numero = $numero;
    }

    public function __toString() {
        return "($this->codigoArea) $this->numero";
    }
}