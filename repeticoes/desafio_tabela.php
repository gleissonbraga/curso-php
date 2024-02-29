<div class="titulo"><h1>Desafio impressão</h1></div>

<!--


-->

<?php
$matriz = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20'],
];

foreach($matriz as $linha) {
    foreach($linha as $valor) {
        echo "$valor ";
    }
    echo '<br>';
}

?>


<table>
    <caption>Elementos</caption>
    <tr>
        <th name="elemento 1"></th>
        <th name="elemento 2"></th>

    </tr>
</table>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>