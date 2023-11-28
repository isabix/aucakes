<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuario WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $pessoas = $user_data['pessoas'];
                $telefone = $user_data['telefone'];
                $dataP = $user_data['dataP'];
                $produtos = $user_data['pessoas'];
                $cpf = $user_data['cpf'];
               
            }
        }
        else
        {
            header('Location: sistema.php');
        }
    }
    else
    {
        header('Location: sistema.php');
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
     <script>
        // Função para formatar o CPF enquanto o usuário digita
        function formatarCPF(cpf) {
            // Limpar caracteres não numéricos
            cpf = cpf.replace(/\D/g, '');

            // Aplicar a máscara 000.000.000-00
            cpf = cpf.replace(/^(\d{3})(\d{3})(\d{3})(\d{2})$/, '$1.$2.$3-$4');

            return cpf;
        }

        // Função para ser chamada enquanto o usuário digita
        function formatarCPFInput(input) {
            input.value = formatarCPF(input.value);
        }
    </script>
</head>
<body>
    <a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
            <legend><b>Editar Cliente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> required>
                    <label for="email" class="labelInput">email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="pessoas" id="pessoas" class="inputUser" value=<?php echo $pessoas;?> required>
                    <label for="pessoas" class="labelInput">UNI/KG</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" oninput="formatarTelefoneInput(this)" maxlength="14" value=<?php echo $telefone;?> required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="date" name="dataP" id="dataP" class="inputUser" value=<?php echo $dataP;?> required>
                    <label for="dataP" class="labelInput">Data</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="produtos" id="produtos" class="inputUser" value=<?php echo $produtos;?> required>
                    <label for="produtos" class="labelInput">produtos</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" oninput="formatarCPFInput(this)" maxlength="14" value=<?php echo $cpf;?> required>
                    <label for="cpf" class="labelInput">cpf</label>
                </div>
                <br><br>
               
                <br><br>
				<input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>