<?php

namespace Impacta\Banco\PadroesProjeto\DataMapper;

class Cliente {
    private int $id;
    private string $name;
    private string $endereco;
    private string $telefone;

    public function __construct(
        int $id,
        string $name,
        string $endereco,
        string $telefone
    ) {
      $this->id = $id;
      $this->name = $name;
      $this->endereco = $endereco;
      $this->telefone =$telefone;  
    }

    public function __set($name, $value): void {
        $this->$name = $value;
    }

    public function __get($name): string {
        return $this->$name;
    }
}