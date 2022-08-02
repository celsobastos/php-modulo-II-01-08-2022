<?php

require __DIR__ . '/../vendor/autoload.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('meu_log.log', Level::Warning));

// add records to the log
$log->warning('Testando avisos');
$log->error('Testando erros');

echo 'Testando monolog';

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://viacep.com.br/ws/01317-001/json/');
echo $response->getStatusCode(); // 200
echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
echo '<pre>';
print_r(json_decode($response->getBody())); // '{"id": 1420053, "name": "guzzle", ...}'