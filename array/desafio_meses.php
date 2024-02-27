<div class="titulo">
    <h1>Desafio Meses</h1>
</div>

<?php


$meses = array(
    1 => "Janeiro", // pode ser feito nesta sequência ou somente colocando 
                    //janeiro como indice 1, assim consequentemente ira para os próximos elementos
    2 => "Fevereiro",
    3 => "Marco",
    4 => "Abril",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
);

print_r($meses);
echo '<br>' . $meses[5];
echo '<br>' . $meses[12];