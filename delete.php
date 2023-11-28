<?php

if (!empty($_GET['id'])) {
    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuario WHERE id=$id";
    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {
        // Obtenha os dados da conta a ser excluída
        $accountData = $result->fetch_assoc();

        // Insira os dados da conta na tabela "usuario_excluido"
        $sqlInsert = "INSERT INTO usuario_excluido (id, nome, email, pessoas, telefone, dataP, produtos, cpf) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conexao->prepare($sqlInsert);
        $stmt->bind_param("isssssss", $accountData['id'], $accountData['nome'], $accountData['email'], $accountData['pessoas'], $accountData['telefone'], $accountData['dataP'], $accountData['produtos'], $accountData['cpf']);

        if ($stmt->execute()) {
            // A inserção foi bem-sucedida, agora exclua a conta original
            $sqlDelete = "DELETE FROM usuario WHERE id='$id'";
            $resultDelete = $conexao->query($sqlDelete);

            if ($resultDelete) {
                // A conta foi excluída com sucesso
                header('Location: sistema.php');
            } else {
                // Tratar erro na exclusão da conta
                echo "Erro ao excluir a conta.";
            }
        } else {
            // Tratar erro na inserção dos dados na tabela "usuario_excluido"
            echo "Erro ao inserir dados na tabela usuario_excluido.";
        }

        $stmt->close();
    } else {
        // Tratar erro, a conta não foi encontrada
        echo "A conta não foi encontrada.";
    }
} else {
    // Tratar erro, o parâmetro 'id' está ausente
    echo "ID ausente.";
}

?>

