<?php

session_start();

?>

<?php
$_SESSION['email'] = 'gabrielfilho_alterado@gmail.com';
$_SESSION['nome'] = 'Gleisson';

?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?>
</p>

<p>
    <b>Email: </b> <?= $_SESSION['email'] ?>
</p>



<p>
    <a href="basico_sessao.php">Voltar</a>
</p>

<p>
    <a href="basico_sessao_limpar.php">Limpar Sessão</a>
</p>