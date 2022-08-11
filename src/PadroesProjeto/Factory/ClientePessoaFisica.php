<?php

namespace Impacta\Banco\PadroesProjeto\Factory;

class ClientePessoaFisica extends Cliente {
    public function perfil(): string {
        return 'Cliente Gold';
    }
}