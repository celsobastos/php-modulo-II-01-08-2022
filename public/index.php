<?php

require __DIR__ . '/../vendor/autoload.php';

// $connect = new PDO(
//     'mysql:host=localhost;dbname=impacta',
//     'impacta',
//     '123456'
// );
// $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// try {

//     $sql = "INSERT INTO clientes (name, endereco, telefone) VALUES ('Joana', 'Rua Padre Rodrigo', '11 95645-6456');";
//     $result = $connect->exec($sql);

//     if ($result) {
//         echo 'Inserido com sucesso';
//     }

// } catch (PDOException $e) {
//     echo $e->getMessage();
// }



// die;



// use Psr\Http\Message\ResponseInterface as Response;
// use Psr\Http\Message\ServerRequestInterface as Request;
// use Slim\Factory\AppFactory;


// $app = AppFactory::create();

// $livros = new stdClass();
// $livros->data = [
//     '1' => [
//         'autor' => 'Machado de Assis',
//         'Titulo' => 'Meu Cajueiro',
//     ],
//     '2' => [
//         'autor' => 'Paulo Coelho',
//         'Titulo' => 'Caminho de São Tiago',
//     ],
//     '3' => [
//         'autor' => 'Marcos de Oliveira',
//         'Titulo' => 'Estrategia, a arte da vida',
//     ],
// ];

// $dados = json_encode($livros);

// $app->get('/livros', function (Request $request, Response $response, $args) use ($dados) {
//     $response->getBody()->write($dados);
//     return $response->withHeader('Content-Type', 'application/json')->withStatus(201);
// });

// $app->post('/livros', function (Request $request, Response $response, $args) use ($dados) {
//     $response->getBody()->write('ola isso foi um post');
//     return $response;
// });

// $app->run();


// $verbo = $_SERVER['REQUEST_METHOD'];
// $rota = $_SERVER['PATH_INFO'];

// $livros = new stdClass();
// $livros->data = [
//     '1' => [
//         'autor' => 'Machado de Assis',
//         'Titulo' => 'Meu Cajueiro',
//     ],
//     '2' => [
//         'autor' => 'Paulo Coelho',
//         'Titulo' => 'Caminho de São Tiago',
//     ],
//     '3' => [
//         'autor' => 'Marcos de Oliveira',
//         'Titulo' => 'Estrategia, a arte da vida',
//     ],
// ];

// switch ($verbo) {

//     case 'GET':    
//         if($rota === '/livros') {
//             header('HTTP/1.1 200 OK');
//             $json = json_encode($livros);
//             echo $json;
//             die;
//         }
//     break;

//     case 'POST':    
//         if($rota === '/livros') {

//             // Json
//             $novo_livro = file_get_contents("php://input");

//             $convert_to_array = (array) json_decode($novo_livro);
//             $new_array = array_merge($livros->data, [$convert_to_array]);

//             header('HTTP/1.1 201 OK');
//             echo json_encode($new_array);
//             die;
//         }
//     break;

// }




/*

use Impacta\Conta;
use Impacta\MyException;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Tratamento de exceção
ini_set('display_errors', 1);
ini_set('error_log','./log/errors.log');
// $calculo = new SplFixedArray(1);
// $calculo[6] = '';
// @fopen($file);
$conta_corrente = new Conta();
$conta_corrente->depositar(800);
$conta_corrente->depositar(200);
try {
    $conta_corrente->sacar(1900);
}
catch (MyException $e) {
    echo $e->myMessage();
}
//  echo 'Saldo: ' . $conta_corrente->extrato();
die;

// Monolog
$log = new Logger('name');
$log->pushHandler(new StreamHandler('your.log', Level::Warning));
// add records to the log
$log->warning('Testando avisos');
$log->error('Testando erros');


// Guzzle
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

*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
        Nome:
        <input type="text" name="nome" >
        <button>Enviar</button>
    </form>
</body>
</html>