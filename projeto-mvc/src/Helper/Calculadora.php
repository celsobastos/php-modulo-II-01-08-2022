<?php

namespace Cliente\Helper;

class Calculadora {

    public Cliente $cliente;

    public function __construct(Cliente $cliente) {
        $this->cliente =$cliente;
    }

    public function somar(float $valor1, float $valor2) {
        $soma = $valor1 + $valor2;
        return $soma;
    }

    public function encontrarCliente(string $nome) {
        $data = array_key_exists($nome, $this->cliente->listaClientes());
        if(!$data) {
            return ['msn' => 'Cliente não encontrado'];
        }
        return true;
    }

    public function listar(): array {
        return $this->cliente->listaClientes();
    }

}
