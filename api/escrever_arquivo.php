<div class="titulo"><h1>Escrevendo Arquivo</h1></div>

<?php
$arquivo = fopen('teste.txt', 'w');

fwrite($arquivo, "Valor Inicial\n");
$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo conteúdo");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, " com novos valores\n");
fwrite($arquivo, "Adicionados em um segundo momento\n");
fclose($arquivo);


ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x');
