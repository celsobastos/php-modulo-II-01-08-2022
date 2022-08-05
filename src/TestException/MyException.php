<?php

namespace Impacta;

use DomainException;

class MyException extends DomainException {
    public function myMessage() {
        return 'Numero da linha é: ' . $this->getLine();
    }
}