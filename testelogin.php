<?php
    session_start();

    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Utilize prepared statements para evitar SQL Injection
        $stmt = $conexao->prepare("SELECT * FROM adm WHERE email = ? AND senha = ?");
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows < 1)
        {
            // Mensagem de erro
            $_SESSION['error'] = "Email ou senha incorretos. Tente novamente.";

            // Redireciona de volta para a página de login
            header('Location: login.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: relatorio.php');
        }
    }
    else
    {
        // Mensagem de erro se os campos não estiverem preenchidos
        $_SESSION['error'] = "Por favor, preencha todos os campos.";

        // Redireciona de volta para a página de login
        header('Location: login.php');
    }
?>
