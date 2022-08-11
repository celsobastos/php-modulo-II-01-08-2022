<?php

namespace Impacta\Banco\PadroesProjeto\Factory;

class ClientePessoaJuridica extends Cliente {
    public function perfil(): string {
        return 'Cliente Silver';
    }
}