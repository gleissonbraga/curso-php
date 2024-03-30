<div class="titulo"><h1>Sessão</h1></div>

<p>
    <a href="/sessao/basico_sessao_alterar.php">Alterar sessão</a>
</p>

<?php 

session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email']){
    $_SESSION['email'] = 'gabriel@azmail.com';
}
print_r($_SESSION);

?>
