<?php

namespace Impacta\Banco\PadroesProjeto\DependencyInjection;

class Aluno {

    private $nome;
    private DataRegisterInterface $register;

    public function __construct(DataRegisterInterface $register) {
        $this->register = $register;
    }

    public function save() {
        $this->register->save($this->nome);
    }

    public function __set($name, $value){
        $this->$name = $value;
    }
}