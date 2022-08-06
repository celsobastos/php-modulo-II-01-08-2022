<?php

namespace Impacta\Banco\Model\Pessoa;

use DateTimeImmutable;
use Impacta\Banco\Model\Pessoa\Cpf;
use Impacta\Banco\Model\Pessoa\Telefone;

abstract class Pessoa {
    protected string $nome;
    protected string $endereco;
    protected Cpf $cpf;
    /** @var Telefole[] $telefone */
    protected array $telefone;
    protected string $dataDeNascimento;
    
    public function __construct(
        string $nome,
        string $endereco,
        Cpf $cpf,
        string $data_nascimento,
        array $telefone = []        
    ) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->cpf = $cpf;
        $data = new DateTimeImmutable($data_nascimento);
        $this->dataDeNascimento = $data->format('d/m/Y');

    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function getEndereco(): string {
        return $this->endereco;
    }

    public function __get($nome_metodo) {
        $getMetodo = 'get' . ucfirst($nome_metodo); // nome - Nome
        // getNome
        // getEndereco
        return $this->$getMetodo();
    }

    public function __set($name, $value){
        $this->$name = $value;
    }

    public function addTelefone(Telefone $telefone): void {
        $this->telefone[] = $telefone;
    }

    public function __unset($name) {
        echo 'testando o unset ' . $name . PHP_EOL;
    }

}
