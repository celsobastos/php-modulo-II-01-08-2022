<?php

namespace Cliente\Model\Repository;
use PDO;

class OracleConnect implements DbConnectInterface {
    public function connect() {
        return new PDO(
            'oracle:host=localhost;dbname=impacta',
            'impacta',
            '123456'
        );
    }
}