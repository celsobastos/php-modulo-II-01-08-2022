<?php

namespace Impacta\Banco\PadroesProjeto\DependencyInjection;

class Mysql implements DataRegisterInterface {
    public function save($nome) {
        echo 'Save com Mysql ' . $nome;
    }
}