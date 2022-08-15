<?php

namespace Cliente\Model\Repository;
use PDO;

class MySqlConnect implements DbConnectInterface {
    public function connect() {
        return new PDO(
            'mysql:host=localhost;dbname=impacta',
            'impacta',
            '123456',
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );
    }
}