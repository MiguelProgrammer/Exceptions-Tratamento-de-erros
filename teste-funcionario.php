<?php

use Alura\Banco\Modelo\{CPF, CpfException, Funcionario\Desenvolvedor, PessoaException, Pessoa};

require_once 'autoload.php';

try {
    $pessoa = new Desenvolvedor("SS", new CPF("123.345.546-67"),200);
} catch (CpfException $ex){
    echo $ex->getMessage();
} catch (PessoaException $ex){
    echo $ex->getMessage();
}