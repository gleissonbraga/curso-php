<div class="titulo">
    <h1>Argumentos Variaveis</h1>
</div>


<?php

# nesta ocasião não é feita a soma de todos os numero e sim somente dos dois pimeiros
function soma($a, $b){
    return $a + $b;
}

echo soma(14, 15) . "<br>";
echo soma(6, 5, 4) . "<br>";

echo "<hr>";

# colocando os 3 pontos (...) na frente do parametro faz com que todos os numeros passados seja somado

function somaCompleta(...$numeros){
    $soma = 0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 4, 5);

$array = [6, 7, 8];

echo '<br>' . somaCompleta(...$array);

echo "<hr>";

function membros($titular, ...$dependentes){
    echo "Titular: $titular <br>";
    if ($dependentes) {
        foreach($dependentes as $dep) {
            echo "Dependente: $dep <br>";
        }

    }
}

echo '<br>';

membros("Ana Silva", "Pedro", "Rafaela", "Amanda");

echo '<br>';

membros("Roberto");
