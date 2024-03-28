<div class="titulo">
    <h1>Return e Require</h1>
</div>

<?php

$valorRetorno = require('return_usado.php');
echo "$valorRetorno<br>";
echo "$variavelRetornada<br>";

echo __DIR__ . '<br>'; // __DIR__ representa aonde esta a pastal atual, ou seja, o local do meu arquivo

$valorRetorno2 = require(__DIR__ . '/return_nao_usado.php');
echo "$valorRetorno2<br>";
echo "$variavelDeclarada";