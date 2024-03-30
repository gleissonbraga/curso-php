<div class="titulo"><h1>Gerenciando Sessão</h1></div>

<?php
// session_id('a4d15f8ea2eab324ce0d3ecee37286bc');
session_start();
echo session_id();

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>' . $_SESSION['contador'];

if($_SESSION['contador'] % 5 === 0){
    session_regenerate_id();
}

if($_SESSION['contador'] >= 15) {
    session_destroy();
}