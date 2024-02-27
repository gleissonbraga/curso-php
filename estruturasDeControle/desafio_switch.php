<div class="title">
    <h1>Desafio Switch</h1>
</div>


<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metros-km">Metros > Km</option>
        <option value="km-metros">Km > Metros</option>
        <option value="celsius-fahrenheit">Celsius > Fahrenheit</option>
        <option value="fahrenheit-celsius">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CELSIUS_FAHRENHEIT = 1.8;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia Milhas";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Milhas = $distancia Km";
        break;
    case 'metros-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metros = $distancia Km";
        break;
    case 'km-metros':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km = $distancia Metros";
        break;
    case 'celsius-fahrenheit':
        $conversaoDeEscalasTermometricas = $param * FATOR_CELSIUS_FAHRENHEIT + 32;
        $mensagem = "{$param}° Celsius = {$conversaoDeEscalasTermometricas}° Fahrenheit";
        break;
    case 'fahrenheit-celsius':
        $conversaoDeEscalasTermometricas = ($param - 32) / FATOR_CELSIUS_FAHRENHEIT;
        $mensagem = "{$param}° Fahrenheit = {$conversaoDeEscalasTermometricas}° Celsius";
        break;
    default:
    $mensagem = "Nenhum valor calculado";
}

echo "<p>$mensagem</p>";