<div class="titulo">
    <h1>Include VS Require</h1>
</div>

<?php
// init_set('display_errors', 1);

echo 'Usando include com arquivo inexistente...<br>';
include('arquivo_inexistente.php');


echo 'Usando require com arquivo inexistente...<br>';
require('arquivo_inexistente.php');

echo 'Não achou mesmo...<br>';