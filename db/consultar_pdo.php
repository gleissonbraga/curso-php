<div class="titulo"><h1>Consultar PDO</h1></div>

<?php

require_once 'conexao_pdo.php';

$conexao = novaConexao();
$sql = "SELECT * from cadastro";
$resultado = $conexao->query($sql)->fetch_all(PDO::FETCH_ASSOC);

print_r($resultado);

echo '<hr>';

$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO:: PARAM_INT);
$stmt->bindValue(':inicio', 3, PDO:: PARAM_INT);

if($stmt->execute()) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

echo "<hr>";

$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
//$stmt->bindValue(':id', 1);
if($stmt->execute([':id' => 15])) {
    $resultado = $stmt->fetch();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

$conexao->close();