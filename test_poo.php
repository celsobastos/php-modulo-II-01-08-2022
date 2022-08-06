<?php

require __DIR__ . '/vendor/autoload.php';

echo 'test class ---------- ' . PHP_EOL;

use Impacta\Banco\Model\Funcionario\Gerente;
use Impacta\Banco\Model\Funcionario\Diretor;
use Impacta\Banco\Model\Pessoa\Cpf;
use Impacta\Banco\Model\Pessoa\Telefone;
use Impacta\Banco\Model\Conta\Titular;
use Impacta\Banco\Model\Funcionario\Estagiario;
use Impacta\Banco\Services\ProcessoBonificacao;

$funcionario = new Diretor(
    "Pedro Almeida Prado",
    'rua das flores',
    new Cpf('123.456.789-10'),
    '2000/02/02',
    5900
);

$array_fones = [
    '011' => '92589-6325',
    '013' => '4577-4144',
];
foreach ($array_fones as $codigo => $fone) {
    $funcionario->addTelefone(new Telefone($codigo, $fone));
}

$processa = new ProcessoBonificacao();
$processa->calcBocinicacao($funcionario);
echo $processa . PHP_EOL;

echo '_____________________________' . PHP_EOL;
die;

class DataNascimento {
    private string $nome;
    private string $data;
    public static int $contador = 0;

    public function __construct(string $nome, string $nascimento) {
        $this->nome = $nome;
        $this->data = $nascimento;
        self::$contador++;
    }

    public static function getNome() {
        return 'Testndo 123';
    }

    public function getContador() {
        return self::$contador;
    }

    public function __toString(){
        return "Nome: " . $this->nome .  " Nascido em (" . $this->data .  ")";
    }

    public function __destruct() {
         echo 'Fui excluido, tchauuuuuuuuuu :( ' . PHP_EOL;
         self::$contador--;
    }
}

class Aluno {
    private string $nome;
    public function __construct(string $nome) {
        $this->nome = $nome;
    }
}

$pessoa = new DataNascimento('Casemiro', '10/04/2000');
$pessoa2 = new DataNascimento('Casemiro', '10/04/2000');
$pessoa3 = new DataNascimento('Casemiro', '10/04/2000');

$test = DataNascimento::getNome();

var_dump($pessoa->getContador());
unset($pessoa);
echo '_______________________' . PHP_EOL;
var_dump($pessoa2->getContador());




// $aluno = new Aluno('Pedro');
// var_dump($aluno);
// $pessoa = $aluno;
// echo '_______________________' . PHP_EOL;
// var_dump($pessoa);


// $gerente->setNome('Eduardo da silva neto');
//unset($gerente->endereco);
// echo 'Datos da Pessoa: ' . $gerente->nome . PHP_EOL;
// echo 'Nome do Gerente: ' . $gerente->getNome() . PHP_EOL;
// echo 'Enderedo do Gerente: ' . $gerente->getEndereco() . PHP_EOL;

// $gerente->autenticar('paulo@bancoimpacta.com','123456');
echo '_______________________' . PHP_EOL;
// var_dump($gerente);
// echo $gerente->getNome() . PHP_EOL;
// echo $gerente->calculaBonificacao() . PHP_EOL;
