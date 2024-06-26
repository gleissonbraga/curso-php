<div class="titulo">
    <h1>Traits 01</h1>
</div>


<?php

trait validacao {
    public $a = 'Valor a';

    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public $b = 'Valor b';
    private $c = 'Valor C (Privado)';
    public function validarStringMelhor ($str){
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor;

    public function imprimirValorC(){
        echo '<br>',$this->c;
    }
}

//var_dump(validacao->validarString(''));

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(' '));
echo '<br>';
echo $usuario->a, echo '<br>' ,$usuario->b;
echo $usuario->imprimirValorC();