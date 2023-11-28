<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM relatorio WHERE visitasN LIKE '%$data%' or pedidosN LIKE '%$data%' or entregues LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM relatorio ";
    }

    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SISTEMA | ADM</title>
    <style>
        body{
            background:#BF95B8;
            color: white;
            text-align: center;
        }
        .table-bg{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
        }

        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
        }




        .row {
            font-size:40px;
            display: flex;
            justify-content: space-between;
            width: 25%;
            margin-bottom: 20px;
          
            flex: 1;
            background-color: #000;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            border-radius: 20px;
            margin: 20px; /* Adiciona margem para criar espaço entre as colunas */
          
        }
    

       

        .square-container {
        display: flex;
        justify-content: space-around; /* Adjust as needed for spacing between squares */
    }

    .square {
        font-size: 40px;
        width: 25%;
        margin-bottom: 20px;
        flex: 1;
        background-color: rgba(0, 0, 0, 0.7); /* Adjust the alpha value (0.0 to 1.0) to set the opacity */
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        padding: 20px;
        text-align: center;
        border-radius: 20px;
        margin: 20px; /* Adiciona margem para criar espaço entre as colunas */
    }





 .custom-navbar {
            background-color: #BF95B8 !important;
        }
        .btn-purple {
        background-color: #735167;
        color: white;
    }

    .btn-purple:hover {
        background-color: darkpurple;
        color: white;
    }

   

        
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar" >
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SISTEMA DO ADMINISTRADOR</a>
            <a href="relatorio.php" class="btn btn-purple me-2">Relatório</a>
<a href="formulario.php" class="btn btn-purple me-2">Cadastro</a>
<a href="sistema.php" class="btn btn-purple me-2">Novos Pedidos</a>
<a href="usuariosexcluidos.php" class="btn btn-purple me-2">Pedidos Finalizados</a>
<a href="sistemaprodutos.php" class="btn btn-purple me-2">Produtos</a>
<a href="postagemongs.php" class="btn btn-purple me-2">Postagens/ONGS</a>
<a href="sistema2.php" class="btn btn-purple me-2">Administradores</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <br>
    <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
    <br>
    
  
    <div class= 'pedidos'>
    <h2>RELATÓRIO<h2>
    </div>
    <div class="m-5 square-container">
   
        <tbody>
            <?php
            while ($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                
                echo "<td><div class='square'><svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' fill='currentColor' class='bi bi-person-raised-hand' viewBox='0 0 16 16'>
                <path d='M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a.998.998 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207Z'/>
                <path d='M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z'/>
            </svg>     <BR>    VISITAS<BR>" . $user_data['visitasN'] . "</div></td>";
                echo "<td><div class='square'><svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' fill='currentColor' class='bi bi-plus-circle-fill' viewBox='0 0 16 16'>
                <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z'/>
              </svg>      <BR>   NOVOS PEDIDOS <BR>" . $user_data['pedidosN'] . "</div></td>";
                echo "<td><div class='square'><svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' fill='currentColor' class='bi bi-cloud-check-fill' viewBox='0 0 16 16'>
                <path d='M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 4.854-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z'/>
              </svg> <BR>
            PEDIDOS FINALIZADOS<BR>" . $user_data['entregues'] ." </div></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
       
    </div>
</body>
</html>

