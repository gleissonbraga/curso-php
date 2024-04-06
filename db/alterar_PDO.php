<div class="titulo"><h1>Alterar PDO</h1></div>

<?php
require_once 'conexao_pdo.php';

$sql = "UPDATE cadastro SET (nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ? WHERE id = ?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    'Gui',
    '1980-12-12',
    'gui@gui.com.br',
    'http://gui.com',
    1,
    12000,
    9
]);

if($resultado) {
    echo "Sucesso :)";
} else {
    print_r($stmt->errorInfo());
}