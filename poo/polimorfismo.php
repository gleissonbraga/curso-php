<div class="titulo">
    <h1>Polimorfismo</h1>
</div>


<?php

abstract class Comida {
    public $peso;

}

class Arroz extends Comida{
    
}

class Feijão extends Comida{

}

class Sorvete extends Comida{

}

class Pessoa {
    public $peso;

    function __construct($peso){
        $this->peso = $peso;
    }

    function __destruct(){
        echo 'Objeto excluido';
    }

    public function comer($comida){
        $this->peso += $comida->peso;
    }
}

$c1 = new Arroz();
$c1->peso = 0.65;

$c2 = new Sorvete();
$c2->peso = 0.65;

$p = new Pessoa(83.45);
$p->comer($c1);

echo $p->peso;