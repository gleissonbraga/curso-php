<div class="titulo">
    <h1>Include Função</h1>
</div>

<?php
echo 'Carregando: include_funcao<br>';

function carregarArquivo(){
    include('include_arquivo.php');
    
    echo $variavel . '<br>';
    echo soma(2, 5) . '!<br>';
}

echo 'Novamente no arquivo include_funcao<br>';
// echo soma(1, 8) . '!<br>';

carregarArquivo();

echo "Variável = '{$variavel}'."; // variavel null
