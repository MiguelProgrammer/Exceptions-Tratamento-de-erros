<?php

namespace Alura\Banco\Modelo;
use Throwable;

class PessoaException extends \DomainException
{
    public function __construct()
    {
        $mensagem = "Quantidade de Caractéres pequena";
        parent::__construct($mensagem);
    }
}