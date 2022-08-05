<?php
namespace Impacta\Basnco;
class Conta {

    private float $saldo = 0;
    
    public function depositar(float $valor): void {
        $this->saldo += $valor;
    }

    public function sacar(float $valor): void {
        if($this->saldo < $valor) {
            $saldo = $this->saldo;
            throw new MyException("Saldo Insuficiente: $saldo");
        }
        $this->saldo -= $valor;    
    }

    public function extrato(): float {
        return $this->saldo;
    }
}