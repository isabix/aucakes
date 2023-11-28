<?php

if (!empty($_GET['id'])) {
    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuario_excluido WHERE id=$id";
    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {

        $accountData = $result->fetch_assoc();

     
        $sqlInsert = "INSERT INTO usuario (id, nome, email, pessoas, telefone, dataP, produtos, cpf) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conexao->prepare($sqlInsert);
        $stmt->bind_param("isssssss", $accountData['id'], $accountData['nome'], $accountData['email'], $accountData['pessoas'], $accountData['telefone'], $accountData['dataP'], $accountData['produtos'], $accountData['cpf']);

        if ($stmt->execute()) {
           
            $sqlDelete = "DELETE FROM usuario_excluido WHERE id='$id'";
            $resultDelete = $conexao->query($sqlDelete);

            if ($resultDelete) {
           
                header('Location: usuariosexcluidos.php');
            } else {
              
                echo "Erro ao excluir a conta.";
            }
        } else {
         
            echo "Erro ao inserir dados na tabela usuario.";
        }

        $stmt->close();
    } else {
     
        echo "A conta não foi encontrada.";
    }
} else {
  
    echo "ID ausente.";
}

?>