<?php 
    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $verifica = preg_match('/^[A-Z]{1}[a-z]{1,} [A-Z]{1}[a-z]{1,}$/',$nome);
        if($verifica)
            echo 'Sucesso!';
        else
            echo 'Nome invalido!';
    }
?>


<form method="post">
    <input type="text" name="nome" placeholder="Insira o nome">
    <input type="submit" name="acao" value="Enviar!">
</form>