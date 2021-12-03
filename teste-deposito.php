<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, SaldoInsuficienteExecption, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
try {
    $contaCorrente->deposita(-500);
} catch (\InvalidArgumentException $ex){
    echo "Valor de deposito precisa ser maior do que ZERO (0)";
}

echo PHP_EOL."Saldo atual = {$contaCorrente->recuperaSaldo()}";
