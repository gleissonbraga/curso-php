<div class="titulo">
    <h1>Construtor e Destrutor</h1>
</div>

<?php

# CONSTRUTOR e DESTRUTOR

// Não é possivel criar uma pessoa se não passarmos o parametro pois não tenho nenhum valor setado

class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade){
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo '<br>E morreu <br>';
    }

    public function apresentar(){
        return "{$this->nome}, {$this->idade}";
    }
}

// utlizando a função constructor

$pessoa1 = new Pessoa('Gleisson', 26);
$pessoa2 = new Pessoa('Camila', 25);

echo $pessoa1->apresentar();
unset($pessoa1);

echo $pessoa2->apresentar();
$pessoa2 = NULL;


// esta função é responsavel por chamar o destrutor

