<div class="titulo">
    <h1>Desafio equação</h1>
</div>

<?php

$contaA = (6 * (3 + 2)) ** 2;
$contaB = 3 * 2;

$contaC = ((1 - 5) * (2 - 7));
$contaD = 2;

$divisaoAB = $contaA / $contaB;
$divisaoCD = ($contaC / $contaD) ** 2;

$resultado_divisao = ($divisaoAB - $divisaoCD) ** 3;
$contaE = 10 ** 3;

$resultadototal = $resultado_divisao / $contaE;

echo "O resultado final é " . $resultadototal . ".";
