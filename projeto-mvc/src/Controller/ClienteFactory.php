<?php

namespace Cliente\Controller;

use DomainException;
use Exception;

class ClienteFactory {

    private string $class;

    public function __construct(string $class_name) {
        $class = $this->preparaClassName($class_name) . 'Processa';
        $this->class = '\\Cliente\\Controller\\' . $class;

        $this->testClass();
    }

    private function testClass() {
        if (!class_exists($this->class)) {
            throw new DomainException('Class não existe');
        }
    }
    
    private function preparaClassName(string $class_name) : string {
        return ucfirst(ltrim($class_name, '/'));
    }

    public function create() {
        return new $this->class;
    }

}
