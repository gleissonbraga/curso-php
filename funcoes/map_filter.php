<div class="titulo">
    <h1>Map e Filter</h1>
</div>

<?php

/*
    ## MAP ##
  A função map percorre o array informado retornando um novo array com valores diferente
  exemplo:
    $array = [1, 2, 3, 4]
    após map ser utilizado e você passar que o novo array será o dobro deste ele trara
    $array = [1, 4, 6, 8]


    ## FILTER ##

    já a função filter faz a seleção que queremos dentro do array passado e nos trás os resultado em um novo array
    Exemplo:
    $array = [1, 2, 3, 4]

    traga somente os números impares
    O filter ira trazer um novo array com os numeros impares nele
    $array = [1, 3]
*/

## função MAP

$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinaisUm = [];

foreach($notas as $nota){
    $notasFinaisUm[] = round($nota); // round faz o arredondamento de numeros 5.8
};

print_r($notasFinaisUm);

echo '<hr>';

#utilizando o MAP

// $notasFinais2 = array_map(round, $notas);
// print_r($notasFinais2);

echo '<hr>';

## função FILTER
$apenasAlunosAprovados1 = [];

foreach($notas as $nota){
    if($nota >= 7) {
        $apenasAlunosAprovados1[] = $nota;
    };
};

print_r($apenasAlunosAprovados1);


echo '<hr>';

## utilizando FILTER

$notas = [5.8, 7.3, 9.8, 6.7];

function aprovados($nota) {
    return $nota >= 7;
}

$apenasAlunosAprovados2 = array_filter($notas, aprovados);

print_r($apenasAlunosAprovados2);

function calculoLegal($nota){
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}