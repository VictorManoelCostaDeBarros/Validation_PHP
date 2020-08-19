<?php 
    if(isset($_POST['acao'])){
        $numero = $_POST['numero'];
        $verifica = preg_match('/^(\([1-9]{2}\)|)[0-9]{5}-[0-9]{4}$/',$numero);
        if($verifica)
            echo 'Sucesso!';
        else
            echo 'Número invalido!';
    }
?>


<form method="post">
    <input type="text" name="numero" placeholder="Insira o numero de celular">
    <input type="submit" name="acao" value="Enviar!">
</form>