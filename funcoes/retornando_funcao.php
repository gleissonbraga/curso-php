<div class="titulo">
    <h1>Retornando Função</h1>
</div>

<?php 

function soma($a) {

    return function ($b) use ($a){
        return $a + $b;
    };
}

echo soma(3)(3);

$doisMais = soma(2);
echo '<br>', $doisMais(10);
echo '<br>', $doisMais(18);