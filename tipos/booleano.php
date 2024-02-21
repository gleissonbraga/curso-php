<div class="titulo">
    <h1>Tipo Booleano</h1>
</div>

<?php 

echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False);
echo '<br>' . var_dump('False');
echo '<br>' . is_bool(False);


// fazer as regras de conversões

echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apenas zero é false
echo '<br>' . var_dump((bool) 20); // apenas zero é false
echo '<br>' . var_dump((bool) -1); // apenas zero é false
echo '<br>' . var_dump((bool) 0.0); // apenas zero é false
echo '<br>' . var_dump((bool) 0.00000001); // apenas zero é false
echo '<br>' . var_dump((bool) ""); // apenas zero é false
echo '<br>' . var_dump((bool) " "); // apenas zero é false
echo '<br>' . var_dump((bool) "00"); // apenas zero é false
echo '<br>' . var_dump((bool) "false"); // apenas zero é false


echo '<br>' . var_dump(!!"false"); // uso da negação