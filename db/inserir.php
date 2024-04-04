<div class="titulo"><h1>Inserrir Registro #01</h1></div>

<?php
require_once "conexao.php";

$sql = "INSERT INTO cadastro 
    (nome, nascimento, email, site, filhos, salario)
    VALUES ('Camila',
            '1998-09-06',
            'camila@email.com.br',
            'https://camila.sites.com.br',
            0,
            1000
    ) ";


$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso! :)";
} else {
    echo "Erro: ";
}

$conexao->close();