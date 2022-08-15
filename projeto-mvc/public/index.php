<?php

require __DIR__ . '/../vendor/autoload.php';

use Cliente\Helper\Calculadora;

$calc = new Calculadora();
$soma = $calc->somar(5, 52);
echo $soma;
exit;

use Cliente\Controller\ClienteFactory; 
$rota = $_SERVER['PATH_INFO'] ?? '/clientes';
$factory = (new ClienteFactory($rota))->create();

$factory->requisicao();
