<div class="titulo"><h1>Criar Banco de Dados</h1></div>


<?php
require_once "conexao.php";

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php';

$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso!";
} else {
    echo "Erro: $conexao->error";
}

$conexao->close();