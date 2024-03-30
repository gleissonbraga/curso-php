<div class="titulo"><h1>Erros Personalizados</h1></div>


<?php

class FaixaEtariaException extends Exception{
    public function __construct($message, $code = 0, $previous = null){
        parent::__construct($message, $code, $previous);
    }
}

function calcularTempoAposentadoria($idade){
    if($idade < 18) {
        throw new FaixaEtariaException('Ainda esta muito longe<br>');
    }
    if($idade > 70){
        throw new FaixaEtariaException('Já deveria estar aposentado');
    }
    return 70 - $idade;
}

$idadesAvaliadas = [15, 30, 60, 80];

foreach($idadesAvaliadas as $idade){
    try{
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "Idade: $idade, $tempoRestante anos restantes<br><br>";
    } catch(FaixaEtariaException $e){
        echo "Não foi possivel calcular para $idade anos <br>";
        echo "Motivo: {$e->getMessage()} <br>";
    }
}

echo "<br>" . 'Fim!';