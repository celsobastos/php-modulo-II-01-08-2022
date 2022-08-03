<?php

use Impacta\Conta;
use Impacta\MyException;

require __DIR__ . '/../vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('error_log','./log/errors.log');

intdiv(5/0);

$conta_corrente = new Conta();
$conta_corrente->depositar(800);
$conta_corrente->depositar(200);

$conta_corrente->sacar(1900);

try {
    $conta_corrente->sacar(1900);
}
catch (MyException $e) {
    echo $e->myMessage();
}

//  echo 'Saldo: ' . $conta_corrente->extrato();
die;

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('your.log', Level::Warning));

// add records to the log
$log->warning('Testando avisos');
$log->error('Testando erros');

echo 'Testando monolog';



$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://viacep.com.br/ws/01317-001/json/');
echo $response->getStatusCode(); // 200
if ($response->getStatusCode() === 404) {
    $log->error('Pagina não encontrada');  
}
echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
echo '<pre>';
print_r(json_decode($response->getBody())); // '{"id": 1420053, "name": "guzzle", ...}'
echo 'Teste';