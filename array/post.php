<div class="titulo">
    <h1>$_POST</h1>
</div>

<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado" id="">
        <option value="AC">Acre</option>
        <option value="BA  ">Bahia</option>
    </select>

    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
print_r($_GET);
echo '<br>';
print_r($_POST);


echo '<br>' . count($_POST);