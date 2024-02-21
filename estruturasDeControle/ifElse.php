<div class="titulo">
    <h1>If/Else</h1>
</div>

<?php

if(true) {
    echo "Serei impresso?<br>";
}

if(true)
    echo 'Verdadeiro<br>';
else   
    echo 'Falso<br>';




if(false) {
    echo "Passo A<br>";
} else if(true) {
    echo "Passo B<br>";
} elseif(true) {
    echo "Passo C<br>";
} else {
    echo "Ultimo passo<br>";
}


echo 'Fim<br>';