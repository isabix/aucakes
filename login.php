
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background:#BF95B8;
            margin-top: 40px;
            margin-left:30px;
        }
        div{
            background-color: rgba(0, 0, 0,0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color:#fff ;
        }
        input{
            padding: 15px;
            border:none;
            outline:none ;
            font: size 15px;
            border-radius: 10px;

        }
        .Inputsubmit{
            background:#735167;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
          
        }
        .Inputsubmit:hover{
            background:#BF95B8;
            COLOR:#000;
        }
        .bi-eye{
            color:black;
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
            padding:1px;
            background-color: transparent;
            color: #fff;
            margin-top: 70px; /* Adiciona espaço entre a mensagem de erro e os campos de entrada */
            white-space: nowrap; /* Evita quebra de linha na mensagem de erro */
        }
       
    </style>
</head>
<body>
    
    <a href="menu.php">Voltar </a>
   
    <div>
        <h1>Login</h1>
        <form action="testelogin.php" method="POST"> 
             <input type="text" name="email" id="email" placeholder="Email">
             <br><br>
             <input type="password" name="senha" id="senha" placeholder="Senha" onclick="mostrarsenha()" >
             
             <br><br>
             <?php
                // Exibe a mensagem de erro, se houver
                if (isset($_SESSION['error'])) {
                    echo '<div class="error-message">';
                    echo $_SESSION['error'];
                    echo '</div>';
                    unset($_SESSION['error']); // Limpa a mensagem de erro depois de exibi-la
                }
            ?>

             <br><br>
             <input class="Inputsubmit" type="submit" name="submit" id="submit" value="Enviar">
        </form>
    </div>
    <script src="site.js"></script>
</body>
</html>