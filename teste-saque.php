<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, SaldoInsuficienteExecption, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
try {
    $conta->deposita(500);
    $conta->saca(600);
} catch (SaldoInsuficienteExecption $ex){
    echo $ex->getMessage();
}

echo PHP_EOL."Saldo atual = {$conta->recuperaSaldo()}";
