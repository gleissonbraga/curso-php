<?php 
session_start();

if($_COOKIE['usuario']){
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">

    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>

    <nav class="navegacao">
        <span class="usuario">
            Usuário: <?= $_SESSION['usuario'] ?>
        </span>
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
        <a href="index.php">Voltar</a>
        <a href="logout.php" class="vermelho">Sair</a>
    </nav>

    <main class="principal">
        <div class="conteudo">
            <?php
               include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>

        </div>
    </main>

    <footer class="rodape">
        <p>COD3R & ALUNOS <?= date('y'); ?></p>
    </footer>

</body>
</html>