<div class="titulo"><h1>Ler Arquivo</h1></div>

<?php
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10);
echo '<br>';
echo fread($arquivo, 10);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');
echo '<br>', $tamanho, '<br>';
echo fread($arquivo, $tamanho);
fclose($arquivo);


echo '<hr>';

## MOdelo mais comum para ler arquivos

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>'; // falso (não existe texto) não aparece na tela
fclose($arquivo);

echo '<hr>';

# Forma de ler todo o arquivo

$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    echo fgets($arquivo), '<br>';
}
fclose($arquivo);


echo '<hr>';

# Forma de ler os caracteres do arquivo

$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    echo fgetc($arquivo), '<br>';
}
fclose($arquivo);


echo '<hr>';

$arquivo = fopen('teste.txt', 'r+');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "n\ Adicionado durante a leitura");
fclose($arquivo);