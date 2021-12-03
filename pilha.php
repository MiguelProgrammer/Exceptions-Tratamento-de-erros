<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try{
        funcao2();
    } catch (Throwable $excecao) {

        echo $excecao->getMessage() . PHP_EOL;
        echo $excecao->getLine() . PHP_EOL;
        echo $excecao->getTraceAsString() . PHP_EOL;
    }
    //    } catch (Error $erro){
    //
    //        echo $erro->getMessage().PHP_EOL;
    //        echo $erro->getLine().PHP_EOL;
    //        echo $erro->getTraceAsString().PHP_EOL;
    //
    //    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    intdiv(5,0);
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
