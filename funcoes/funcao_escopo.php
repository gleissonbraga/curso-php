<div class="titulo">
    <h1>Função e Escopo</h1>
</div>


<?php
function imprimirMensagem() {
    echo "Ola! ";
    echo "Até a próxima! <br>";
}

imprimirMensagem();
imprimirMensagem();
imprimirMensagem();
imprimirMensagem();

$variavel = 1;
function trocaValor() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";


// a funcao global tranforma uma variavel um conteudo global dentro do codigo

function trocaValorDeVerdade() {
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}


echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

var_dump(trocaValorDeVerdade());



// Seu array de palavras
$arrayPalavras = array("PHP", "é", "uma", "linguagem", "poderosa");

// Inverte a ordem das palavras no array
$arrayInvertido = array_reverse($arrayPalavras);

// Converte o array invertido de volta para uma string
$stringInvertida = implode(' ', $arrayInvertido);

// Exibe a string invertida
echo $stringInvertida;