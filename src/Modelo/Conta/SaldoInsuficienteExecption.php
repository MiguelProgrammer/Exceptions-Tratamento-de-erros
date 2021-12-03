<?php

namespace Alura\Banco\Modelo\Conta;
use Alura\Banco\Modelo\Conta\{SaldoInsuficienteException};
use Throwable;

class SaldoInsuficienteExecption extends \DomainException
{
    /**
     * @param float $valorSaque
     * @param $saldo
     */
    public function __construct(float $valorSaque, $saldo)
    {
        $mensagem = "Saldo Insuficiente | Valor de saque [$valorSaque]";
        parent::__construct($mensagem);
    }
}