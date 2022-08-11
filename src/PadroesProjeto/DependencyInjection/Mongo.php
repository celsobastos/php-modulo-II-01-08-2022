<?php

namespace Impacta\Banco\PadroesProjeto\DependencyInjection;

class Mongo implements DataRegisterInterface {

    public function save($nome) {
        echo 'Sanvando com Mongo DB ' . $nome;
    }
    
}