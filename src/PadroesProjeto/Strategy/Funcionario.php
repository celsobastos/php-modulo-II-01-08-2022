<?php

namespace Impacta\Banco\PadroesProjeto\Strategy;

abstract class Funcionario {
    
    protected string $nome;
    protected float $salario;

    public function __construct(
        string $nome,
        float $salario,  
    ) {
      $this->nome = $nome;
      $this->salario = $salario;
    }

    abstract public function applicarBonus(): void; 

    public function __toString() {
        return "Nome: {$this->nome} - Novo Salário: {$this->salario}";
    }

    public function getSalario() {
        return $this->salario;
    }
}