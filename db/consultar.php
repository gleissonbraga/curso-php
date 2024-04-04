<div class="titulo"><h1>Consultar Registro #01</h1></div>

<?php
require_once "conexao.php";

$sql = "SELECT * FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registros = [];

if($resutado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif ($conexao->error) {
    echo "Erro: $conexao->error";
}

print_r($registros);

$conexao->close();