<div class="titulo">
    <h1>Array Multidimensionais</h1>
</div>

<?php
$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"
    ],
];

print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

// exemplo de como adicionar um elemento no array abaixo
$dados[] = [
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "México"
];


echo '<br>';
echo '<br>' . $dados[2]['idade'];


$dados[2]["vizinho"] = "chaves"; // adiciona um dado ao meu código
echo '<br>';
print_r($dados[2]);



unset($dados[1]); // remove um elemento do array, removendo o indice 1 do array. Ele não ordena os próximos da lista com indice 1
echo '<br>';
echo '<br>';
print_r($dados);
