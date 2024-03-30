<div class="titulo"><h1>Try/Catch</h1></div>


<?php
// echo intdiv(7, 0);

try {
    echo intdiv(7 ,0);
} catch(Error $e) {
    echo 'Teve um erro aqui <br>';
}

echo '<hr>';

try {
    throw new Exception('Um erro muito estranho aconteceu');
    echo intdiv(7, 0);
} catch(DivisionByZeroError $e){
    echo 'Divisão por zero <br>';
} catch(Throwable $e){
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
} finally {
    echo 'Sempre executa <br>';
}

echo 'Execução continua... <br>';