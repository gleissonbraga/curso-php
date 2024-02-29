<div class="titulo">
    <h1>Array Constantes</h1>
</div>

<?php
const FRUTAS = ['laranja', 'abacaxi']; // com const não é possivel alterar o valor do produto ou acrescentar elementos
//exemplo erro
//FRUTAS[0] = 'banana';
//FRUTAS[] = 'banana';
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
echo '<br>' . CARROS["Fiat"];

// outro exemplo de criar um array
define('CIDADES', array('Belo Horizonte', 'Recife'));
echo '<br>' . CIDADES[''];
