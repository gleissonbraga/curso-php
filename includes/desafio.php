<div class="titulo">
    <h1>Desafio Modulo</h1>
</div>

<?php

require_once('usuario.php');

$usuario = new Usuario('Gleisson Braga', 21, 'gleisson_braga');
$usuario->apresentar();

unset($usuario);