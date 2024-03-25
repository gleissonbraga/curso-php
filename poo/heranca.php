<div class="titulo">
    <h1>Herança</h1>
</div>

<?php


class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Pessoa criada <br>";
    }

    function __destruct(){
        echo "Pessoa diz tchau!";
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

// extends é utilizado para declarar que usuario se torna filho de Pessoa

class Usuario extends Pessoa{
    public $login;

    function __construct($nome, $idade, $login){
       // $this->nome = $nome;
       // $this->idade = $idade;
        parent::__construct($nome, $idade); // faz com que chamamos a ação do pai que seria pessoa
        $this->login = $login;
        echo "Usuário criado <br>";
    }

    function __destruct(){
        echo "Usuário diz tchau!";
    }

    public function apresentar(){
        echo "@{$this->login}: ";
        parent::apresentar();
    }
}

$usuario = new Usuario('Gleisson Braga', 21, 'gleisson_braga');
$usuario->apresentar();

unset($usuario);