<div class="titulo">
    <h1>Variáveis Variáveis</h1>
</div>

<?php
$a ='valorA';
$$a = 'valorAA';

$valorA = 'valorAA';
echo "$a {$$a}  ${$a} $valorA";


echo '<br>';
$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!';
echo "$epa {$$epa} {$$$epa}";