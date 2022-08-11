<?php

require __DIR__ . '/../vendor/autoload.php';

use Cliente\Controller\ClienteFactory; 
$rota = $_SERVER['PATH_INFO'] ?? '/clientes';
$factory = (new ClienteFactory($rota))->create();

$factory->requisicao();
