<?php

require __DIR__ . '/vendor/autoload.php';

echo 'test class ---------- ' . PHP_EOL;

use Impacta\Banco\Model\Funcionario\Gerente;
use Impacta\Banco\Model\Pessoa\Cpf;
use Impacta\Banco\Model\Pessoa\Telefone;

$gerente = new Gerente(
    'Pedro Alcantara da Silva',
    'Rua das Flores',
    new Cpf('123.456.789-10'),
    '2000/05/7',
    4000
);

echo $gerente->getNome() . PHP_EOL;
echo $gerente->calculaBonificacao() . PHP_EOL;

$array_fones = [
    '011' => '92589-6325',
    '013' => '4577-4144',
    '054' => '92547-2584',
    '013' => '92337-2002',
    '014' => '93657-4562',
    '018' => '95678-4588',
];

foreach ($array_fones as $codigo => $fone) {
    $gerente->addTelefone(new Telefone($codigo, $fone));
}

echo '_______________________' . PHP_EOL;
var_dump($gerente);
