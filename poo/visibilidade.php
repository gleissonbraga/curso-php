<div class="titulo">
    <h1>Visibilidade</h1>
</div>

<?php
/*
    ENCAPSSULAMENTO

    MODIFICADORES DE ACESSO

    Public
    Protected
    Private
*/

class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA(){
        echo "Classe A) Publico = {$this->publico}<br>";
        echo "Classe A) Protegido = {$this->protegido}<br>";
        echo "Classe A) Privado = {$this->privado}<br>";
    }

    protected function vaiPorHerança(){
        echo "Serei transmitido por herança<br>";
    }

    private function naoMOstrar(){
        echo "Não vou imprimir";
    }
}

$a = New A();
$a->mostrarA;
// $a->naoMostrarA;


class B extends A{
    public function mostrarB(){
        echo "Classe B) Publico = {$this->publico}<br>";
        echo "Classe B) Protegido = {$this->protegido}<br>";
        echo "Classe B) Privado = {$this->privado}<br>";
        parent::vaiPorHerança();
    }
}
echo '<br>';

$b = new B();
$b->mostrarA();
echo '<br>';
$b->mostrarB();
//$b->vaiPorHerança(); /////  Não funciona ERRO!!