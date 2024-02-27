<div class="titulo">
    <h1>Operações</h1>
</div>

<?php


$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2["endereço"] = "Rua A"; // adiciona um elemento no array

// esta operação faz a mesclagem dos dois arrays
$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); // usado para saber se é um array
echo '<br>' . count($dadosCompletos); // utilizado para saber quantos elementos temos no array

echo '<br>';
echo '<br>';
$indice = array_rand($dadosCompletos); // esta função tras de forma randomica o array
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
// echo $dadosCompletos['idade']";       (não é possivel interpolar desta forma)
echo "{$dadosCompletos['idade']}"; // inserindo a chaves é possivel intepolar
echo " ${dadosCompletos['idade']}";

unset($dadosCompletos["nome"]); // esta função remove um elemento do array
echo '<br>';
print_r($dadosCompletos);

unset($dadosCompletos); // neste formato remove todos os elementos do array
echo '<br>';
print_r($dadosCompletos);


// mesclagem dos arrays através do valor indice (obs: pode ser prejudicial ao código fazer mesclagem através do indice)
$impares = [ 1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares; // não faz a mesclagem do array, leva em consideração o primeiro array chamado
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares); // forma correta de fazer o merge dos arrays a partir do indice
echo '<br>';
print_r($decimais);

sort($decimais); // altera o array original trazendo em ordem toda a lista
echo '<br>';
print_r($decimais);