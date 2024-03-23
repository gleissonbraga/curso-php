<div class="titulo">
    <h1>Argumentos e Retorno</h1>
</div>


<?php

// função sem parametro que só retorna um valor

function obterMensagem() {
    return 'Seja bem vindo';
}

obterMensagem();
$m = obterMensagem();
echo $m;

echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());

//função que recebe parametro e retorna alguma coisa

function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}";
}

echo '<br>', obterMensagemComNome("Wagner");
echo '<br>', obterMensagemComNome("Gleisson");

function soma($a, $b) {
    $soma = $a + $b;
    return $soma;
}


$x = 4;
$y = 5;
echo '<br>', soma(4, 5);
echo '<br>', soma($x, $y);
echo '<br>', soma(45, 78);


function trocaValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3);
echo '<br>', $variavel;

function trocarValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocarValorDeVerdade($variavel, 5);
echo '<br>', $variavel;