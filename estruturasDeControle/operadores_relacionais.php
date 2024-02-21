<div class="titulo">
    <h1>Operadores Relacionais</h1>
</div>

<?php

var_dump(1 == 1);
var_dump(1 > 1);
var_dump(4 < 23);
var_dump(1 >= 1);
var_dump(1 <= 7);
var_dump(1 <> 1);
var_dump(1 != 1); // 1 é igual ou diferente de 1


var_dump(111 == '111');
var_dump(111 === '111');
var_dump(111 != '111');
var_dump(111 !== '111');

echo "<p>Relacionais no if/Else</p><hr>";

$idade = 65;
if($idade < 18) {
    echo "Menor de idade = $idade<br>";
} elseif($idade <= 65) {
    echo "Adulto = $idade<br>";
} else {
    echo "Terceira idade = $idade";
}