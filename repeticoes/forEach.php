<div class="titulo"><h1>forEach</h1></div>

<?php
// fprEach percorre o array

$array = [1 => 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'];

foreach ($array as $valor) {
    echo "$valor <br>";
}

echo '<hr>';

foreach ($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}

echo '<hr>';

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach($matrix as $linha) {
    //echo "$linha <br>";
    foreach($linha as $letra ) {
        echo "$letra ";
    }
    echo '<br>';
}

echo '<hr>';

$numeros = [1, 2, 3, 4, 5];

// o simbolo & faz a troca do valor na memória de cada indice mudando le no array, 
// já se não for utilizado ele muda na impressão porém não é modificado no array

foreach ($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar <br>";
}
print_r($numeros);