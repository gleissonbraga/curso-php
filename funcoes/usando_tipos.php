<div class="titulo">
    <h1>Argumento Padrão</h1>
</div>

<?php
function soma1($a, $b){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo soma1(1,2) . '<br>';
echo soma1(1.7,2.5) . '<br>';
echo soma1(1, '4dois') . '<br>';


echo '<br>';
echo '<hr>';

function soma2(int $a, int $b){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo soma2(1,2) . '<br>';
echo soma2(1.7,2.5) . '<br>';
echo soma2(1, '4dois') . '<br>';

echo '<br>';
echo '<hr>';

function soma3($a,  $b): int{
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo soma3(1,2) . '<br>';
echo soma3(1.7,2.5) . '<br>';
echo soma3(1, '4dois') . '<br>';