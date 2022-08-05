<?php

namespace Impacta\Banco\Model\Pessoa;

use Impacta\Banco\Model\Pessoa\PessoaException;

class Cpf {

    private string $cpf;

    public function __construct(string $cpf){
        $this->validaCpf($cpf);
        $this->cpf = $cpf;
    }

    public function getCpf(): string {
        return $this->cpf;
    }

    private function validaCpf(string $cpf) {
        $is_cpf = filter_var(
            $cpf,
            FILTER_VALIDATE_REGEXP,
            [
                "options" => [
                    "regexp"=>"/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/"
                ]
            ]
        );
        if (!$is_cpf) {
           throw new PessoaException('Ops! CPF Invalido');
        }
        return;
    }
}