<!--
    sobrescreva o método intdiv para...
    - Lançar uma execução quando tentar dividir por zero
    - Lançar uma exceção quando o resultado não for inteiro
    - Dividir normalmente nos demais casos

    Os testes... e 
    - intdiv com os parametros 8 e 2 [sucesso]
    - intdiv com os parametros 8 e 3 [exceção] 
    - intdiv com os parametros 8 e 0 [exceção] 
    - intdiv "original" com os parametros 8 e 3 [sucesso]
-->

<?php

namespace Aritmetica;
class NaoInteiroException extends \Exception{

}

function intdiv($a, $b){
    if ($b == 0){
        throw new \DivisionByZeroError();
    }

    if($a % $b > 0) {
        throw new NaoInteiroException();
    }

    return $a / $b;
}