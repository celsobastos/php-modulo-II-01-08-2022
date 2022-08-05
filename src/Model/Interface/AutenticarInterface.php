<?php

namespace Impacta\Banco\Model\Interface;

interface AutenticarInterface {
    /**
     * Autenticação de usuarios no sistema
     */
    public function autenticar(string $login, string $senha);
}