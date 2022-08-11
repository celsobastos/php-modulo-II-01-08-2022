<?php

namespace Impacta\Banco\PadroesProjeto\Factory;
use Exception;

class ClienteFactory {
    private string $class;

    public function __construct(string $class) {
        
        $this->class = '\\Impacta\\Banco\\PadroesProjeto\\Factory\\' . $class;

        if(!class_exists($this->class)) {
            throw new Exception('A class ' . $class . ' não existe');
        }
    }

    public function createObject() {
        return new $this->class;
    }
} 
