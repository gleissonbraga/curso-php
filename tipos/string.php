<div class="titulo">
    <h1>Tipo string</h1>
</div>


<?php
echo 'eu sou uma string';
echo '<br>';
var_dump("Eu também"); // acento acaba contando como um número da string então, "Eu também" = 10 caracteres e "Eu tambem" = 9 caracteres
echo '<br>';

// concatenação

// ponto serve para fazer concatenação
echo "Nós também" . 'somos';
echo '<br>', "Também aceito", " virgulas";

echo '<br>';
echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\";

print("<br>Também existe a função print");
print "<br>Também existe a função print";

// algumas funções 
echo '<br>' . strtoupper('maximizando');
echo '<br>' . strtolower('MINIMIZANDO');
echo '<br>' . ucfirst('Só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen('Eu támbem', "utf-8"); // retira o acento da contagem da string
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // selecionou parte
echo '<br>' . str_replace('Isso', 'aquilo', 'trocar Isso');