<?php namespace contexto; ?>

<div class="titulo">
    <h1>Basico Namespace</h1>
</div>


<?php


echo __NAMESPACE__ . '<br>';

const constante1 = 123;
define('contexto\constante2', 234);
define(__NAMESPACE__ . '\constante3', 345);
define('outro_contexto\constante4', 465);

echo constante1 . '<br>';
echo constante2 . '<br>';
// echo \contexto\constante3 . '<br>';   ### esta dando erro
echo constant(__NAMESPACE__ . '\constante3');
echo \outro_contexto\constante4 . '<br>';


function soma($a, $b){
    return $a + $b;
}

echo \contexto\soma(1,2) . '<br>';

function strpos($str, $text){
    echo "Buscando o texto '{$text}' em '{$str}'<br>";
    return 1;
}

echo strpos('Texto genérico para busca', 'busca') . '<br>';
echo \strpos('Texto genérico para busca', 'busca') . '<br>';