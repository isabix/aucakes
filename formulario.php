<?php
include_once('config.php');

// Defina uma variável para armazenar a mensagem de erro
$errorMsg = "";

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    // Verificar se o nome ou email já existem no banco de dados
    $checkQuery = "SELECT * FROM adm WHERE nome='$nome' OR email='$email'";
    $checkResult = mysqli_query($conexao, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // Nome ou email já existem, atribua a mensagem de erro
        $errorMsg = "Nome ou email já cadastrado no sistema.";
    } else {
        // Nome e email são únicos, proceda com a inserção no banco de dados
        $result = mysqli_query($conexao, "INSERT INTO adm(nome, senha, email, telefone) 
        VALUES ('$nome','$senha','$email','$telefone')");

        if ($result) {
            header('Location: login.php');
        } else {
            $errorMsg = " " . mysqli_error($conexao);
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario|ADM</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background:#BF95B8;
            margin-top: 40px;
            margin-left:30px;
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px dashed #BF95B8;
        }
        legend{
            border: 1px solid #BF95B8;
            padding: 10px;
            text-align: center;
            background-color: #BF95B8;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background:none ;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelinput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: 0.5s;
        }
        .inputUser:focus~.labelinput,
        .inputUser:valid~.labelinput{
            top: -20px;
            font-size: 12px;
            color: #BF95B8;
        }
        #data_nascimento{
          border: none;
          padding: 8px;
          border-radius: 10px;  
          outline: none;
          font-size: 15px;
        }
        #submit{
            background:#735167;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background:#BF95B8;
            COLOR:#000;
        }
        a{
            margin-top:40px;
            text-decoration: none;
            color: white;
            border: 3px solid #735167;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: #735167;
        }
        .error-message {
            color: #fff;
            display: <?php echo empty($errorMsg) ? 'none' : 'block'; ?>;
        }
    </style>
</head>
<script>
        // Função para formatar o número de telefone enquanto o usuário digita
        function formatarTelefone(telefone) {
            // Limpar caracteres não numéricos
            telefone = telefone.replace(/\D/g, '');

            // Aplicar a máscara (00) 00000-0000
            telefone = telefone.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');

            return telefone;
        }

        // Função para ser chamada enquanto o usuário digita
        function formatarTelefoneInput(input) {
            input.value = formatarTelefone(input.value);
        }
    </script>
<body>
    <a href="sistema.php">Voltar </a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastro Administrador</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelinput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelinput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email"  class="labelinput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" oninput="formatarTelefoneInput(this)" maxlength="14" required>
                    <label for="telefone"  class="labelinput">Telefone</label>
                </div>
                <br><br>
                <div class="error-message"><?php echo $errorMsg; ?></div>
                
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>