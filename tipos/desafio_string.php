<div class="titulo"><h1>Desafio String</h1></div>

<?php

// !AbcaBcabc

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>';

echo stripos(strtolower('!AbcaBcabc'), 'abc');