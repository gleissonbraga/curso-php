<div class="titulo">
    <h1>Operadores lógicos</h1>
</div>

<?php

echo '<p>V ou F</p><hr>';
var_dump(true);
echo '<br>';
var_dump(!true); // not


echo "<p>Tabela Verdade 'AND' (E) </p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(flase && true);
var_dump(false && false);
var_dump(false && 3 > 2 && 7 <= 7);
var_dump(false && 3 > 2 && 7 <= 7 && === '3');

echo '<br>';

var_dump(true and true);
var_dump(true and false);
var_dump(flase and true);
var_dump(false and false);
var_dump(false and 3 > 2 and 7 <= 7);
var_dump(false and 3 > 2 and 7 <= 7 and === '3');

echo "<p>Tabela Verdade 'OR' (OU) </p><hr>";
var_dump(true || true);
var_dump(true || falso);
var_dump(falso || true);
var_dump(falso || falso);

echo '<br>';

var_dump(true || true);
var_dump(true || falso);
var_dump(falso || true);
var_dump(falso || falso);

echo "<p>Tabela Verdade 'XOR' (OU Exclusivo) </p><hr>";
var_dump(true xor true);
var_dump(true xor falso);
var_dump(falso xor true);
var_dump(falso xor falso);


var_dump(true != true);
var_dump(true != falso);
var_dump(falso != true);
var_dump(falso != falso);


echo "<p>Exemplo</p><hr>";
$idade = 62;
$sexo = 'F';

$pagouPrevidencia = true;
$podeSeAposentar = $pagouPrevidencia && 
(
    ($idade >= 60 && $sexo === 'F') ||
    ($idade >= 65 && $sexo === 'M')
);


if($idade >= 60 && $sexo === 'F') {
    echo 'Pode se aposentar';
} elseif($idade >= 65 && $sexo === 'M') {
    echo 'Pode se aposentar';
} else {
    echo 'vai ter que trabalhar mais um pouco';
}