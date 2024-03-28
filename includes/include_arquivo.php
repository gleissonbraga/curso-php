<?php

echo 'Carregando: include_arquivo<br>';

$variavel = 'Estou definida';

// metodo para incluir arquivo e ser usado sem dar bug por ter duas funções com escopo igual
if(!function_exists(soma)){
    function soma($a, $b){
        return $a + $b;
    }

}