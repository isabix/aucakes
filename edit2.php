<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM adm WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $senha = $user_data['senha'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
               
            }
        }
        else
        {
            header('Location: sistema2.php');
        }
    }
    else
    {
        header('Location: sistema2.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | ADM</title>
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
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
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
    </style>
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
     
</head>
<body>
    <a href="sistema2.php">Voltar</a>
    <div class="box">
        <form action="saveEdit2.php" method="POST">
            <fieldset>
                <legend><b>Editar Administrador</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value=<?php echo $senha;?> required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" oninput="formatarTelefoneInput(this)" maxlength="14" value=<?php echo $telefone;?> required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
               
                <br><br>
				<input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>