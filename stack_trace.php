<?php

function func01() {
    echo 'Iniciando func01' . PHP_EOL;
    try {
        func02();
    }
    catch (Throwable  $issue) {
        // echo 'Aconteceu um problema, mas foi tratado' . PHP_EOL;
        echo '-------------------------------------'. PHP_EOL;
        echo $issue->getMessage() . PHP_EOL;
        echo '-------------------------------------'. PHP_EOL;
        // echo $issue->getTraceAsString() . PHP_EOL;
        // echo 'Linha onde aconteceu o problema: ' . $issue->getLine() . PHP_EOL;
    }
    
    echo 'Finalizando func01' . PHP_EOL;
    return '145';
}
function func02() {
    echo 'Iniciando func02'  . PHP_EOL; 
    for($i = 0; $i < 10; $i++) {
        echo 'index: ' . $i . PHP_EOL;
    }
    $run = new RuntimeException('Lançado erro explicito..');
    throw $run;

    /** Exception */
    // $lista = new SplFixedArray(3);
    // $lista[3] = 'Sabonete';

    /** Error */
    // $calculo = intdiv(5/0);

    echo 'Finalizando func02'  . PHP_EOL;
}
echo 'Iniciando o programa Principal (main)' . PHP_EOL;
func01();
echo 'Finalizando o programa Principal (main)' . PHP_EOL;