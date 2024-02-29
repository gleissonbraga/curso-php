<div class="titulo"><h1>Desafio impressão</h1></div>

<!--
    Enunciado:
    - Imprima apenas os valores do array que contém indice par
    - Desafio adicional: Resolver com for e foreach
    - Valores esperados: AAA, CCC, EEE

-->

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

echo '<p>Exemplo feito pelo instrutor</p>';

foreach($array as $indice => $valor) {
    if($indice % 2 === 0) continue;
    echo "$valor <br>";
}

echo '<br>';

for($i = 0; $i <= count($array); $i++) {
    if($i % 2 !== 0) continue;
    echo "{$array[$i]} <br>";
}

echo '<hr>';


echo '<p>Exemplo desenvolvido</p>';

foreach($array as $indice => $valor) {
    if($indice % 2 === 0){
        echo "$valor <br>";
    }
}