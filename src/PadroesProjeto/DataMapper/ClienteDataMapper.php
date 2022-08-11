<?php

namespace Impacta\Banco\PadroesProjeto\DataMapper;

use PDO;
use PDOException;

class ClienteDataMapper {
    private PDO $register;

    public function __construct(PDO $register) {
        $this->register = $register;
    }

    public function getById(int $id): Cliente {
        try {
            $stmt = $this->register->prepare('SELECT * FROM clientes WHERE id = :id');
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $cliente = $stmt->fetch(PDO::FETCH_OBJ);
            
            return new Cliente(
                $cliente->id,
                $cliente->name,
                $cliente->endereco,
                $cliente->telefone
            );
        } catch (PDOException $e) {
            echo $e->getTraceAsString();
        }
    }

    public function getAll(): array {
        try {
            $stmt = $this->register->prepare('SELECT * FROM clientes');
            $stmt->execute();
            $clientes = [];
            while($cliente = $stmt->fetch(PDO::FETCH_OBJ)) {
                $clientes[] = new Cliente(
                    $cliente->id,
                    $cliente->name,
                    $cliente->endereco,
                    $cliente->telefone
                );
            }
            return $clientes;
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    /**
     * Salva clientes
     * 
     * @param Impacta\Banco\PadroesProjeto\DataMapper\Cliente $cliente
     *  Um objeto da classe Cliente
     * 
     * @return int
     *  numero de linhas salvas
     * 
     */
    public function salvar(Cliente $cliente) : int {
        try {
            $stmt = $this->register->prepare(
                "INSERT INTO clientes (name, endereco, telefone) VALUES (:name, :end, :tel)"
            );
            $stmt->bindValue(':name', $cliente->name, PDO::PARAM_STR);
            $stmt->bindValue(':end', $cliente->endereco, PDO::PARAM_STR);
            $stmt->bindValue(':tel', $cliente->telefone, PDO::PARAM_STR);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}