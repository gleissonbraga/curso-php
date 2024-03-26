<div class="titulo">
    <h1>Interface</h1>
</div>

<?php
interface Mamifero {
    function mamar();
}

interface Animal {
    function respirar();
}

interface Canino extends Animal {
    function latir(): string;
}

interface Felino {
    function correr();
}

class Cachorro implements Animal, Mamifero {
    function respirar(){
        return "Irei usar oxigênio";
    }
    function latir(): string{
        return "au au";
    }

    function mamar(){
        return "Irei usar leite";
    }

    function correr(){
        echo 'vrummm';
    }
}

$animal1 = new Cachorro();
echo $animal1->respirar(), '<br>';
echo $animal1->latir(), '<br>';
echo $animal1->mamar(), '<br>';
echo $animal1->correr(), '<br>';


echo '<br>';
var_dump($animal1);

echo '<br>';
var_dump($animal1 instanceof Cachorro);
var_dump($animal1 instanceof Canino);
var_dump($animal1 instanceof Mamifero);
var_dump($animal1 instanceof Animal);
//var_dump($animal1 instanceof Felino);
