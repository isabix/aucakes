<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $pessoas = $_POST['pessoas'];
        $telefone = $_POST['telefone'];
        $dataP = $_POST['dataP'];
        $produtos = $_POST['produtos'];
        $cpf = $_POST['cpf'];
       
       
        
        $sqlInsert = "UPDATE usuario 
        SET nome='$nome',email='$email',email='$email',pessoas='$pessoas',telefone='$telefone',dataP='$dataP',produtos='$produtos',cpf='$cpf'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>