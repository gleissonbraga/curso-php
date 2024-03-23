<div class="titulo">
    <h1>Closure e Callable</h1>
</div>

<?php
$soma1 = function ($a, $b){
    return $a + $b;
};

echo '<br>';
echo '<hr>';


function soma2($a, $b){
    return $a + $b;
};

echo (is_callable(soma2) ? 'Sim' : 'Não') . '<br>';

echo '<br>';
echo '<hr>';
echo $soma1(2,3) . '<br>';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

echo '<br>';

$soma1 = 1;
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

var_dump($soma1);