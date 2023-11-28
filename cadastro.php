<?php
if (isset($_POST["cadastrar"])) {
    include_once("conec.php");

    // Inicializa a mensagem de erro
    $errorMsg = "";

    // Função para verificar se a data está no formato correto e é válida
    function isValidDate($date)
    {
        $today = new DateTime();
        $userDate = DateTime::createFromFormat('Y-m-d', $date);
        
        return $userDate && $userDate >= $today;
    }

    // Função para formatar o CPF
    function formatarCPF($cpf)
    {
        // Limpar caracteres não numéricos
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        // Verificar se o CPF tem 11 dígitos
        if (strlen($cpf) != 11) {
            return false;
        }

        // Adicionar a máscara do CPF
        return substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9, 2);
    }

    // Obter dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $pessoas = filter_input(INPUT_POST, 'pessoas', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $dataP = filter_input(INPUT_POST, 'dataP', FILTER_SANITIZE_STRING);
    $produtos = filter_input(INPUT_POST, 'produtos', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);

    // Verificar se o valor de "UNI/KG" é maior que 10
    if ($pessoas > 10) {
        $errorMsg .= "A UNI/KG não pode ser maior que 10.<br>";
    }

    // Verificar se a data está no formato correto e é válida
    if (!isValidDate($dataP)) {
        $errorMsg .= "Por favor, insira uma data válida.<br>";
    }

    // Verificar se a data é maior que 5 meses a partir de hoje
    $fiveMonthsFromNow = new DateTime();
    $fiveMonthsFromNow->modify('+5 months');
    if (DateTime::createFromFormat('Y-m-d', $dataP) > $fiveMonthsFromNow) {
        $errorMsg .= "A data não pode ser superior a 5 meses a partir de hoje.<br>";
    }

    // Verificar se o CPF tem 11 dígitos
    if (!formatarCPF($cpf)) {
        $errorMsg .= "CPF inválido.<br>";
    } else {
        // Formatar o CPF
        $cpf = formatarCPF($cpf);
    }
 

    // Se não houver mensagens de erro, inserir no banco de dados e redirecionar
    if (empty($errorMsg)) {
        $result_usuario = "INSERT INTO usuario (nome, email, pessoas, telefone, dataP, produtos, cpf) VALUES ('$nome', '$email', '$pessoas', '$telefone', '$dataP', '$produtos', '$cpf')";
        $resultado_usuario = mysqli_query($conn, $result_usuario);

        if (mysqli_insert_id($conn)) {
            header("Location: telalogin.php"); // Altere "outra_pagina.php" para o nome da sua página de destino
            exit(); // Certifique-se de sair para evitar que o código continue a ser executado após o redirecionamento
        } else {
            $errorMsg .= "Erro ao inserir dados no banco de dados.<br>";
        }
    }
}
?>



          


          <?php
session_start();
include_once("conec.php");


if (!isset($_SESSION['visitasN'])) {

    $_SESSION['visitasN'] = 1;


    $initialCount = 1;
    $update_query = "UPDATE relatorio SET visitasN = $initialCount";
    mysqli_query($conn, $update_query);
} else {

    $_SESSION['visitasN']++;

    $updatedCount = $_SESSION['visitasN'];
    $update_query = "UPDATE relatorio SET visitasN = $updatedCount";
    mysqli_query($conn, $update_query);
}


?>
 


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="icon" href="fotos/logocomcirculobranca.png" sizes="192x192" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
         div i {
          
        font-size: 300px;
        cursor: pointer;
        color: #5a4838;
      }

      .form-container {
        
        display: flex;
        justify-content: space-between;
        margin: 20px; 
      }
      .form-left {
        flex: 1;
        padding: 10px; 
      }
      .form-right {
        flex: 1;
        padding: 10px; 
      }
      .container {
       
    background-color: #e3aeaa;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgb(90, 72, 56);
    width: 890px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}





.form-group select {
    flex: 2; 
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    outline: none;
    border: 0;
    background: transparent;
    border-bottom: 1px solid #ffffff;
    color: #000000;
    font-size: 16px;
}

.option {
    flex: 2;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    outline: none;
    border: 0;
    background: transparent;
    border-bottom: 1px solid #ffffff;
    color: #000000;
    font-size: 16px;
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
    <div class="image-between-buttons">
      <div class="divider"></div>
      <a class="back-button" href="menu.php">Voltar</a>
      <div class="divider"></div>
      <img src="fotos/chocho.png" width="220px" height="150px">
      <div class="divider"></div>
    </div>
    <div>
      <div class="container">
        <h2>FAÇA SUA ENCOMENDA</h2>
        <form method="POST">
          <div class="form-container">
            <div class="form-left">
              <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="nome" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="pessoas">UNI/KG</label>
                <input type="text" id="pessoas" name="pessoas" required>
              </div>
              <div class="form-group">
    <label for="phone">Telefone</label>
    <input type="tel" name="telefone" oninput="formatarTelefoneInput(this)" maxlength="14" required>
</div>

            </div>
            <div class="form-right">
              <div class="form-group">
                <label for="dob">Data</label>
                <input type="date" name="dataP" required>
              </div>
              <div class="form-group">
              <label for="produtos">Produtos</label>
              <select name="produtos" required>
              <option value='1'>Bolo Limão Siciliano</option>
              <option value='2'>Banoffe</option>
              <option value='3'>Frutas Amarelas</option>
              <option value='4'>Trufado de Chocolate Zero Açúcar</option>
              <option value='5'>Trufado de Chocolate com Morango Zero Açúcar</option>
              <option value='6'>Trufado de Chocolate</option>
              <option value='7'>CHOCOLATE CHIPS</option>
              <option value='8'>TRIPLE CHOCOLATE </option>
              <option value='9'>DOUBLE CHOCOLATE</option>
              <option value='10'>OATMEAL RAISINS</option>
              <option value='11'>WHITE CHOCOLATE CHIPS WHITE WALNUTS</option>
              <option value='12'>BROWNIE COOKIE</option>
              <option value='13'>COOKIE WITH FRUITS</option>
              <option value='14'>CHOCOLATE CHIPS WITH MACADAMIA</option>
              <option value='15'>CHOCOLATE CHIPS WITH WALNUTS</option>
              <option value='16'>COOKIE FIT</option>
              <option value='17'>DUPLO DIET</option>
              <option value='18'>COOKIE SANDWICH</option>
              <option value='19'>FRAMBOESA</option>
              <option value='20'>MAÇA VERDE</option>
              <option value='21'>PINK LEMONADE</option>
              <option value='22'>LIMÃO SICILIANO</option>
              <option value='23'>COOKIE SHAKE</option>
              <option value='24'>MILK SHAKE</option>
              <option value='25'>MALCHENEY</option>
              <option value='26'>Bolo Massa Folhada com baba de moça e doce de leite</option>
              <option value='27'>Red velvet perfil brasileiro</option>
              <option value='28'>Red velvet perfil americano</option>
              <option value='29'>Bolo Moça de churros</option>
              <option value='30'>Bolo da Maria</option>
              <option value='31'>Brigadeirinho</option>
              <option value='32'>MUD FRAPPÉ</option>
              <option value='33'>CHOCOLATE GELADO</option>
              <option value='34'>PÃO DE QUEIJO</option>
              <option value='35'>SONOMA</option>
              <option value='36'>TURLOCK</option>
              <option value='37'>PETALUMA</option>
              <option value='38'>SAN DIEGO</option>
              <option value='39'>YUBA</option>
              
             
</select>


               
              </div>
              <div class="form-group">
    <label for="cpf">CPF</label>
    <input type="text" name="cpf" oninput="formatarCPFInput(this)" maxlength="14" required>
</div>

            </div>
          </div>


          <div class="error-message" style="color: #000; text-align: center; margin-top: 10px;"><?php if (!empty($errorMsg)) echo $errorMsg;
          unset($_SESSION['error']); // Limpa a mensagem de erro depois de exibi-la ?></div>
          
 
          <div class="form-group">
            <input type="submit" class="btn" name="cadastrar" value="ENVIAR PEDIDO">
          </div>
        </form>
      </div>
      <script src="site.js"></script>
    </div>
  </body>
</html>



