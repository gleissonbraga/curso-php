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
    <title>Curso PHP</title>
</head>
<body>

    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>

    <nav class="navegacao">
        <span class="usuario">
            Usuário: <?= $_SESSION['usuario'] ?>
        </span>
        <a href="logout.php" class="vermelho">Sair</a>
    </nav>

    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">Olá PHP</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">Integração HTML</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">Integração CSS</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">Desafio</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Módulo 02</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=int">Tipo inteiro</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=float">Tipo float</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=aritmeticas">Tipo Aritmeticos</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedência</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=string">Tipo string</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=booleano">Tipo Booleano</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=conversoes">Conversoes</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Módulo 03</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=basico">Variáveis</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio equação</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolacao</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=variaveisvariaveis">Variáveis Varáveis</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafiovariaveisvariaveis">Desafio Varáveis</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor vs Referencia</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Módulo 04</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=estruturasDeControle&file=ifElse">If/Else</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=estruturasDeControle&file=operadores_relacionais">Operadores Relacionais</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=estruturasDeControle&file=desafio_PI">Desafio PI</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=estruturasDeControle&file=operadores_logicos">Operadores Lógicos</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=estruturasDeControle&file=desafio_operadores_logicos">Desafio Operadores Lógicos</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=estruturasDeControle&file=operador_ternario">Operador Ternario</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=estruturasDeControle&file=switch">Switch</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=estruturasDeControle&file=desafio_switch">Desafio Switch</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>Módulo 05</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=array&file=basico">Básico Array</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=array&file=mapa">Mapa</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=array&file=desafio_index">Desafio Index</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=array&file=desafio_meses">Desafio Meses</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=array&file=operacoes">Operações</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=array&file=desafio_sorteio">Desafio Sorteio</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=array&file=multidimensionais">Array Multidimensionais</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=array&file=constantes">Array Constantes</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=array&file=get">$_GET</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=array&file=post">$_POST</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=array&file=comparacao">Comparação entre Arrays</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo verde-escuro">
                    <h3>Módulo 06</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=for">For</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=desafio_for">Desafio For</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=forEach">forEach</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=break">Break</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=desafio_impressao">Desafio Impressão   while_dowhile</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=while_dowhile">While/DoWhile</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=desafio_tabela">Desafio Tabela</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=desafio_tabela_dois">Desafio Tabela 2</a>
                        </li>
                    </ul>
                </div> 
                <div class="modulo vermelho-escuro">
                    <h3>Módulo 06</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=funcao_escopo">Funções e Escopo</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=argumentos">Argumentos e Retorno  desafio_palindromo</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=desafio_palindromo">Desafio Palindromo</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=args_variaveis">Argumentos Variáveis</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=arg_padrao">Argumento Padrão</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=usando_tipos">Usando Tipos</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=func_anonimas">Função Anonima</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=closure_callable">Closure e Callable</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=recursividade">Recursividade</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=desafio_recursividade">Desafio Recursividade</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=retornando_funcao">Retornando função</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=map_filter">Map e Filter</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul-escuro">
                    <h3>Módulo 07</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=poo&file=classe">Funções e Escopo</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=poo&file=desafio_classe_data">Desafio Classe Data</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=poo&file=construtor_destrutor">Contrutor e Destrutor</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=poo&file=heranca">Herança</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=poo&file=visibilidade">Visibilidade</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=poo&file=static">Membros Estáticos</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=poo&file=interface">Interface</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=poo&file=abstrata">Classe Abstrata</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=poo&file=desafio_erros">Desafio Erros</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=poo&file=final">Modificador final</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=poo&file=traits_01">Traits 1</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=poo&file=traits_02">Traits 2</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=poo&file=metodos_magicos">Metodos Mágicos</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=poo&file=polimorfismo">Polimorfismo</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo-escuro">
                    <h3>Módulo 08</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=includes&file=include">Include</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=includes&file=include_funcao">Include Fução</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=includes&file=includeVsRequire">Include VS Require</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=includes&file=return_require">Require e Return</a>includeERequire_once
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=includes&file=include_once">Include Once e Require once</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=includes&file=desafio">Desafio Módulo</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo laranja-escuro">
                    <h3>Módulo 09</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=namespace&file=basico">Namespace</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=namespace&file=sub_namespace">Sub-namespace</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=namespace&file=use_as">Use/As</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo verde">
                    <h3>Módulo 10</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tratamento_erro&file=try_catch">Try e Catch</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tratamento_erro&file=erros_personalizados">Erros Personalizados</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tratamento_erro&file=desafio_intdiv_teste">Desafio intdiv</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tratamento_erro&file=erro_handler">Erro Handler</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Módulo 11</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=sessao&file=basico_sessao">Sessao</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=sessao&file=gerenciamento_sessao">Gerenciamento Sessão</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Módulo 12</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=api&file=datas_01">Datas 01</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=api&file=datas_02">Datas 02</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=api&file=escrever_arquivo">Escrever Arquivo</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=api&file=ler_arquivo">Ler Arquivo</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=api&file=upload">Upload de Arquivo</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=api&file=download">Download</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Módulo 13</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=formulario&file=formulario">Formulario</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=sessao&file=gerenciamento_sessao">Gerenciamento Sessão</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>

    <footer class="rodape">
        <p>COD3R & ALUNOS <?= date('y'); ?></p>
    </footer>

</body>
</html>