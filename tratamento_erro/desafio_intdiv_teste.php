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
<div class="titulo"><h1>Desafio intdiv</h1></div>

<?php
require_once('desafio_intdiv.php');

use function \Aritmetica\intdiv;  // este contexto chama a função do outro arquivo para que passamos utilizar

try {
    echo intdiv(8, 3) . '<br>';
} catch(\Aritmetica\NaoInteiroException $e){
    echo 'Resultado não é um número inteiro';
}

echo '<hr>';

try {
    echo intdiv(8, 0) . '<br>';
} catch(DivisionByZeroError $e){
    echo 'Divisão por zero<br>';
}


echo intdiv(8, 2) . '<br>';
echo \intdiv(8, 2) . '<br>';