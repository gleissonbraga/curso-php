<div class="titulo">
    <h1>Função Anonima</h1>
</div>

<?php

$soma = function($a, $b){
    return $a + $b;
};

echo $soma(1, 2) . '<br>';

echo '<br>';
echo '<hr>';

function executar($a, $b, $op, $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

executar(2, 3, '+', $soma);


echo '<br>';
echo '<hr>';

$multiplicacao = function($a, $b){
    return $a * $b;
};

executar(2, 3, '*', $multiplicacao);

echo '<br>';
echo '<hr>';

function divisao($a, $b){
    return $a / $b;
};


executar(2, 3, '/', divisao);