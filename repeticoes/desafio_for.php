<div class="titulo"><h1>Desafio For</h1></div>


<!-- 
#
##
###
####
#####
1) Pode usar incremento $i++
2) Não pode usar um incremento aritmético $i++
-->
<?php


// 1)
$array = ['#', '##', '###', '####', '#####'];

for($i = 0; $i <= count($array); $i++) {
    echo "{$array[$i]}<br>";
}


/*

$impressao = '';
for($cont = 0, $cont < 5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}
*/

// 2)

echo '<hr>';

for($impressao2 = '#'; $impressao2 !== '######'; $impressao .= '#') {
    echo "$impressao <br>";
}