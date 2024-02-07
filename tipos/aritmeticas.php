<div class="titulo">
    <h1>Operações aritmeticas</h1>
</div>

<?php 
echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7, 4), '<br>'; // exclui a casa decimal
echo round(7 / 4), '<br>'; // faz o arredondamento do valor 
echo 7 % 4, '<br>';
// echo 7 / 0, '<br>';
// echo intdiv( 7, 0): # erro!
echo 4 ** 2, '<br>'; // esta seria 4 elevado a dois

// precedência de operadores:
// () => ** => / * % => + -

echo '<p>Precedência<p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) **2;