<?php

namespace Alura\Banco\Modelo;
use Throwable;

class CpfException extends \DomainException
{
    public function __construct()
    {
        $mensagem = "CPF Inválido";
        parent::__construct($mensagem);
    }
}