<div class="titulo"><h1>Inserir PDO</h1></div>

<?php

require_once 'conexao_pdo.php';

$sql = "INSERT INTO cadastro (nome, email, nascimento, site, filhos, salario) 
    VALUES (
    'Guilherme Filho',
    'guidagalera@email.com',
    '1998-7-21',
    'http://guidagalera.com.br',
    2,
    12000
)";

$conexao = novaConexao();

//print_r(get_class_methods($conexao));

if($conexao->exec($sql)) {
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id.";
} else {
    echo $conexao->errorCode();
    print_r($conexao->errorInfo());
}

$conexao->close();