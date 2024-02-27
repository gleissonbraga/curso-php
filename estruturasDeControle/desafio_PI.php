<div class="titulo">
    <h1>Desafio PI</h1>
</div>


<?php
echo pi();
$pi = 3.14;

//var_dump($pi);
//var_dump(pi());

if($pi == pi()) {
    echo "<br>Iguais";
} else {
    echo "<br>Diferentes";
}


// operador relacional
$piErrado = 2.8;


// resposta
echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - $piErrado);

if($pi - pi() <= 0.01) {
    echo "<br>São iguais";
} else{
    echo "<br>São diferentes";
}