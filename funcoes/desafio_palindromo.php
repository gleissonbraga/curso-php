<div class="titulo">
    <h1>Desafio Palindromo</h1>
</div>

<form action="#" method="post">
    <label for="nome">Digite um nome</label>
    <input type="text" name="nome" id="nome">
    <button>Enviar</button>
</form>


<?php

function palindromo($palavra) {
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++) {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
        }
    }
    return 'Sim';
}


$nome = $_POST['nome'];
//echo palindromo($nome);

function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}

echo palindromoSimples($nome);




echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

function find_average($array): float{
    if (empty($array)){
    return 0;
}
    for($i = 1; $i <= count($array); $i++){
        $soma = array_sum($array);
        $somaIndice = count($array);
        $media = $soma / $somaIndice;
    }
    return $media;
}

$minhaLista = [1,2,3];

echo find_average($minhaLista);