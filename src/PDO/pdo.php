<?php

$connect = new PDO(
    'mysql:host=localhost;dbname=impacta',
    'impacta',
    '123456'
);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $nome = $_POST['nome'];
    $endereco = 'Rua Padre Rodrigo';
    $telefone = '11 95645-6456';

    $sql = "INSERT INTO clientes (name, endereco, telefone) VALUES ('$nome', '$endereco', '$telefone');";
    // PDOStatement
    $connect->exec($sql);

} catch (PDOException $e) {
    echo $e->getMessage();
    echo $e->getTraceAsString();
}
exit('Executado com sucesso');



try {
    $nome = $_POST['nome'];
    $endereco = 'Rua Padre Rodrigo';
    $telefone = '11 95645-6456';

    $sql = "INSERT INTO clientes (name, endereco, telefone) VALUES (?, ?, ?);";
    // PDOStatement
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $endereco);
    $stmt->bindParam(3, $telefone);

    $stmt->execute();

} catch (PDOException $e) {
    echo $e->getMessage();
    echo $e->getTraceAsString();
}
exit('Executado com sucesso');


try {
    $nome = $_POST['nome'];
    $endereco = 'Rua Padre Rodrigo';
    $telefone = '11 95645-6456';

    $sql = "INSERT INTO clientes (name, endereco, telefone) VALUES (?, ?, ?);";
    // PDOStatement
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(1, $nome, PDO::PARAM_STR);
    $stmt->bindParam(2, $endereco, PDO::PARAM_STR);
    $stmt->bindParam(3, $telefone, PDO::PARAM_STR);

    $stmt->execute();

} catch (PDOException $e) {
    echo $e->getMessage();
    echo $e->getTraceAsString();
}
exit('Executado com sucesso');


try {
    $nome = $_POST['nome'];
    $endereco = 'Rua Padre Rodrigo';
    $telefone = '11 95645-6456';

    $sql = "INSERT INTO clientes (name, endereco, telefone) VALUES (:nome, :endereco, :tel);";
    // PDOStatement
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':endereco', $endereco, PDO::PARAM_STR);
    $stmt->bindParam(':tel', $telefone, PDO::PARAM_STR);

    $stmt->execute();

} catch (PDOException $e) {
    echo $e->getMessage();
}
exit('Executado com sucesso');


try {
    $nome = $_POST['nome'];
    $endereco = 'Rua Padre Rodrigo';
    $telefone = '11 95645-6456';

    $sql = "INSERT INTO clientes (name, endereco, telefone) VALUES (?, ?, ?);";
    // PDOStatement
    $stmt = $connect->prepare($sql);
    $stmt->execute([
        $nome,
        $endereco,
        $telefone,
    ]);

} catch (PDOException $e) {
    echo $e->getMessage();
}
exit('Executado com sucesso');


try {
    $nome = $_POST['nome'];
    $endereco = 'Rua Padre Rodrigo';
    $telefone = '11 95645-6456';

    $stmt = $connect->prepare("INSERT INTO clientes (name, endereco, telefone) VALUES (:nome, :end, :tel);");
    $stmt->execute([
        ':nome' => $nome,
        ':end' => $endereco,
        ':tel' => $telefone,
    ]);

} catch (PDOException $e) {
    echo $e->getMessage();
}
exit('Executado com sucesso');


$array1 = array('nome' => 'Pedro', 'end' => 'Rua bla bla');
$array2 = [
    'nome' => 'Pedro',
    'end' => 
    'Rua bla bla'
];


/**
 * Resgatando informação do bando
 */

 try {
    $id = 2;

    $sql = 'SELECT * FROM clientes WHERE id = :id';
    $stmt = $connect->prepare($sql);
    $stmt->bindValue(':id', $id , PDO::PARAM_INT);
    $stmt->execute();

    // Resgatando informações do banco
    $cliente = $stmt->fetch(PDO::FETCH_OBJ);

    echo '<pre>';
    print_r($cliente);
    exit;

 } catch (PDOException $e) {
    echo $e->getMessage();
    echo $e->getTraceAsString();
 }
exit('Executado com sucesso');

try {

    $sql = 'SELECT * FROM clientes';
    $stmt = $connect->prepare($sql);
    $stmt->execute();

    // Resgatando informações do banco
    // $cliente = $stmt->fetch(PDO::FETCH_OBJ);

    while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
        echo($linha->id) . '<br>';
        echo($linha->name) . '<br>';
        echo($linha->endereco) . '<br>';
        echo($linha->telefone) . '<br>';
        echo '<hr>';
    }
    exit;

 } catch (PDOException $e) {
    echo $e->getMessage();
    echo $e->getTraceAsString();
 }
exit('Executado com sucesso');

try {
    $connect = new PDO(
        'mysql:host=localhost;dbname=impacta',
        'impacta',
        '123456',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

    $sql = 'SELECT distinct(name), endereco AS end, telefone as tel  FROM clientes';
    $stmt = $connect->prepare($sql);
    $stmt->execute();

    $clientes = $stmt->fetchAll();

    echo '<pre>';
    print_r($clientes);
    exit;

 } catch (PDOException $e) {
    echo $e->getMessage();
    echo $e->getTraceAsString();
 }

//exit('Executado com sucesso');

$pdo = new PDO(
    'mysql:host=localhost;dbname=impacta',
    'impacta',
    '123456',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);

$pdo->beginTransaction();

try {

    $insert1 = "INSERT INTO clientes (name, endereco, telefone) VALUES (:nome, :end, :tel);";
    $stmt = $pdo->prepare($insert1);
    $stmt->execute([':nome' => 'Beltoso',':end' => 'Rua bla bla', ':tel' => '95825-9969']);


    $insert2 = "INSERT INTO clientes (name, endereco, telefone) VALUES (:nome, :end, :tel);";
    $stmt = $pdo->prepare($insert2);
    $stmt->execute([':nome' => 'Jonas',':end' => 'Rua: Pessego', ':tel' => '95825-4141']);


    $insert3 = "INSERT INTO clientes (name, endereco, telefone) VALUES (:nome, :end, :tel);";
    $stmt = $pdo->prepare($insert3);
    $stmt->execute([':nome' => 'Cintia',':end' => 'Rua: Limão', ':tel' => '91477-2584']);

    // $delete = "DELETE FROM clientes WHERE id = :id";
    // $stmt = $pdo->prepare($delete);
    // $stmt->bindValue(':id', 1 , PDO::PARAM_INT);
    // $stmt->execute();

    $update = "UPDATE clientes set name = :nome WHERE id = :id";
    $stmt = $pdo->prepare($update);
    $stmt->bindValue(':nome', 'Joaquim' , PDO::PARAM_STR);
    $stmt->bindValue(':id', 2 , PDO::PARAM_INT);
    $stmt->execute();

 } catch (PDOException $e) {
    $pdo->rollBack();
    echo $e->getMessage();
    echo $e->getTraceAsString();
    die;
 }

exit('Executado com sucesso');
header("location: /");