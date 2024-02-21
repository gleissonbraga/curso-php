<div class="titulo">
    <h1>Valor vs Referência</h1>
</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

// Atribuição por valor
$variavelValor = $variavel;
echo "<br> $variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavelValor ";
echo $variavel;

// Atribuição por referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br> $variavel $variavelReferencia";