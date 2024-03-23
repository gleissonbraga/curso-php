<div class="titulo">
    <h1>Argumento Padrão</h1>
</div>

<?php 

function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
    return "Bem Vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(NULL, NULL);
echo saudacao('Mestre', 'Suremo');


echo '<br>';
echo '<hr>';

function anotaPedido($comida, $bebida = 'Água'){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotaPedido("Hamburguer");
anotaPedido('Pizza', 'Refrigerante');

echo '<br>';
echo '<br>';

function anotaPedido2( $bebida = 'Água', $comida){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

//anotaPedido2("Hamburguer");
anotaPedido2('Refrigerante', 'Pizza');