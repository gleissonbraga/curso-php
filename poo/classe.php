<div class="titulo">
    <h1>Primeira Classe</h1>
</div>

<?php

class Cliente {
    // atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar() {
        return "Nome: {$this->nome} Idade: {$this->idade}<br>";
    }
}

$c1 = new Cliente(); // cria um novo cliente usando o mold class 
$c1->nome = "Ana Silva"; // muda o valor do nome
$c1->idade = 27; // muda o valor da idade 
echo $c1->apresentar(), '<br>'; // ativa a função apresentar que esta dentro da classe

echo $c1->nome, '<br>'; // acessando atraves do echo sem a função

# inserindo um novo cliente

$c2 = new Cliente;
$c2->nome = "Gleisson";
$c2->idade = 26;
echo $c2->apresentar(), '<br>';