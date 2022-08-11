<?php

namespace Cliente\Controller;
use Cliente\Infrastructure\ClienteDataMapper;
use PDO;

class ClientesProcessa extends RenderFile {
    public function requisicao() :void {
        $pdo = new PDO(
            'mysql:host=localhost;dbname=impacta',
            'impacta',
            '123456',
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );

        $cliente = new ClienteDataMapper($pdo);
        $cli = $cliente->getAll();

        $this->render('cliente', "Lista de Clientes", $cli);
    }
}