<div class="titulo">
    <h1>Operador Ternário</h1>
</div>

<?php
$idade = 70;
$status;

if($idade >= 18) {
    $status =  'Maior de idade';
} else {
    $status = 'Menor de idade';
}

echo "$status<br>";

$idade = 17;

$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
echo "$status<br>";

$status = $idade >= 18 ? $idade >= 65 ? 'Aposentado' : 'Maior de idade' : 'Menor de idade';