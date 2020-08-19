<?php 
    if(isset($_POST['acao'])){
        $cep = $_POST['cep'];
        $verifica = preg_match('/[0-9]{5}-[0-9]{3}$/',$cep);
        if($verifica)
            echo 'Sucesso!';
        else
            echo 'CEP invalido!';
    }
?>


<form method="post">
    <input type="text" name="cep" placeholder="Insira o cep">
    <input type="submit" name="acao" value="Enviar!">
</form>