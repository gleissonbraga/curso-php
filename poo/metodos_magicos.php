<div class="titulo">
    <h1>Métodos Mágicos</h1>
</div>


<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'Objeto excluido';
    }

    public function __toString(){
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar(){
        echo $this . '<br>';
    }

    public function __get($atrib) {
        echo "Lendo atributo não declarado: {$atrib}<br>";
    }

    public function __set($atrib, $valor){
        echo "Alterando atributo não declarado: {$atrib}/{$valor}<br>";
    }

    public function __call($metodo, $param){
        echo "Tentando executar método ${medodo}";
        echo ", com os parametros: ";
        print_r($param);
    }
}

$pessoa = new Pessoa('Gleisson', 26);
$pessoa->apresentar(); // chamando o toString
echo $pessoa, '<br>'; // chamando o toString
$pessoa->nome = 'Reinaldo'; // valor alterado
$pessoa->apresentar(); // chamando o toString

echo '<hr>';

echo $pessoa->nomeCompleto = 'Muito Legal!!!!'; // chamando o __set
echo $pessoa->nomeCompleto;  // chamando o __get
echo $pessoa->apresentar(); // acessa o atributo diretamente sem o __get

echo '<hr>';

$pessoa->exec(1, 'Teste', True, [1, 2, 3]); // chamando o call pq o método não existe no objeto

$pessoa = null; // __destruct