<div class="titulo">
    <h1>Membros Estáticos</h1>
</div>

<?php

class A {
    public $naoStatic = "Variável de instância";
    public static $static = 'Váriavel de classe (estática)';

    public function mostrarA(){
        echo "Não estática = {$this->naoStatic}<br>";
        
        # Tentativa 01
//        echo "Estática = {$this->static}<br>";
        echo "Estática =" . {self::$static} . "<br>";
    }
    
    public static function mostrarStaticA(){
//        echo "Não estática = {$this->naoStatic}<br>";
        echo "Estática =" . self::$static . "<br>";

    }
}

$objetoA = new A();
$objetoA->mostrarA();

A::mostrarStaticA();  // boa pratica para chamar a static acessando direto pela classe

A::$static = 'Alterado mebro de classe!';
echo A::$static;