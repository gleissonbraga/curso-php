<?php namespace Outro\Nome; ?>


<div class="titulo">
    <h1>Use/As</h1>
</div>


<?php
echo __NAMESPACE__ . '<br>';

include('use_as_arquivo.php');

function soma($a, $b){
    return $a . $b; // sei que esta errado, esta concatenando para que eu possa reparar as duas functions 
}


class Classe {
    public $var;

    function func(){
        echo __NAMESPACE__ . '->' . __CLASS__ . '->' . __METHOD__ . '<br>';
    }
}

echo \Nome\Bem\Grande\constante . '<br>';

use const Nome\Bem\Grande\constante;
echo constante . '<br>';

echo '<hr>';

use Nome\Bem\Grande as ctx;

echo soma(1,2) . '<br>';
echo ctx\soma(1,2) . '<br>';
// use function Nome\Bem\Grande\soma;
use function Nome\Bem\Grande\soma as somaReal;
echo somaReal(100,212) . '<br>';

echo '<hr>';


$a = new Classe();
$a->func();
echo '<hr>';

$b = new \Nome\Bem\Grande\Classe();
$b->func();
echo '<hr>';

$c = new ctx\Classe();
$c->func();
echo '<hr>';

use \Nome\Bem\Grande\Classe as D;
$d = new D();
$d->func();