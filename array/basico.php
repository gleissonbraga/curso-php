<div class="titulo">
    <h1>Array</h1>
</div>

<?php
$lista = array(1, 2, 3.4, "texto");

// Modelo de impressão do array 1
echo $lista . '<br>';
var_dump($lista);

// Modelo de impressão do array 2
echo '<br>';
print_r($lista);

// alterando o valor do elemento do array

$lista[0] = 1234;
echo '<br>';
print_r($lista);

//Acessando elemento do array

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];


// acessando letras do array
$texto = 'Esse é um texto teste';
echo '<br>' . $texto[0];
echo '<br>' . $texto[3]; // cuidado possui acentuação
echo '<br>' . mb_substr($texto, 10, 1);  // Jeito certo de se acessar array da string com UTF-8 (variavel do array, caractere, quantidade escolhida)
