<div class="titulo">
    <h1>Variáveis</h1>
</div>

<?php

$numeroA = 13;

echo $numeroA;
echo '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;
echo'<br>';

echo isset($soma);
echo'<br>';

unset($soma);
echo !isset($soma);
var_dump($soma);
echo'<br>';

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string";
echo '<br>' . $variavel;

// nomes de variável
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // evitar acentuação
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);
