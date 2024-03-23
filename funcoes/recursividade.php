<div class="titulo">
    <h1>Recursividade</h1>
</div>

<?php
function somaUmAte($numero) {
    $soma = 0;
    for (; $numero >= 1; $numero--){
        $soma += $numero;
    }
    return $soma;
}

echo somaUmAte(150) . '<br>';


echo '<hr>';

function somaRecursividadeAteUm($numero){
    if($numero === 1){
        return 1;
    }
    return $numero + somaRecursividadeAteUm($numero - 1);
}

echo somaRecursividadeAteUm(150) . '<br>';


echo '<hr>';

function somaRecursivaEconomica($numero){
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}

echo somaRecursividadeAteUm(150) . '<br>';