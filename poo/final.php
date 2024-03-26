<div class="titulo">
    <h1>Modificador Final</h1>
</div>


<?php

abstract class Abstrata {
    abstract public function metodo1();


// quando a função FINAL for chamada não é possivel utilizar esta função em outras classes 
    public final function metodo2() {
        echo "não vou mudar!<br>";
    }
}



class Classe extends Abstrata {
    public function metodo1(){
        echo 'Executando método 1<br>';
    }

// NÃO É POSSIVEL CHAMAR NOVAMENTE UMA FUNÇÃO QUE FOI DEFINIDA COM 'FINAL'

   // public function metodo2() {
   //     echo 'Extendendo método 2<br>';
   // }
}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2();


final class Unica {
    public $attr = 'Valor único';
}

$unica = new Unica();
echo $unica->attr;

//class Duplicata extends Unica {
//    public $att2;
// }