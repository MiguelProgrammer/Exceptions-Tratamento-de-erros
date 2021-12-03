<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, CpfException};

require_once 'autoload.php';

try {
    $cpf = new CPF("634e5634566");
    echo $cpf->recuperaNumero();
} catch (CpfException $ex){
    echo $ex->getMessage();
}