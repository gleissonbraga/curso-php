<?php
require_once('pessoa.php')

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