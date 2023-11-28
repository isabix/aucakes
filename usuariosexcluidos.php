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
        $sql = "SELECT * FROM usuario_excluido WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuario_excluido ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
    

    // Obtém a quantidade de linhas na tabela usuario
$quantidadeLinhas = mysqli_num_rows($result);
// Atualiza a tabela relatorio
$sqlrelatorio = "UPDATE relatorio SET entregues = $quantidadeLinhas";
$conexao->query($sqlrelatorio);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SISTEMA | ADM</title>
    <style>
        body{
            background:#BF95B8;
            color: white;
            text-align: center;
        }
        .table-bg{
            background-color: rgba(0, 0, 0, 0.7); /* Adjust the alpha value (0.0 to 1.0) to set the opacity */
            border-radius: 15px 15px 0 0;
        }

        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
        }

        .btn-sm {
    background: #198754;
    border: 0px;
    transition: background-color 0.3s; /* Adicione uma transição suave para a mudança de cor de fundo */
}

.btn-sm:hover {
    background: #157649; /* Define a cor que deseja quando o cursor passar por cima */
    cursor: pointer; /* O cursor se torna uma mãozinha para indicar que é clicável */
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
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-purple">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>
    <div class="m-5">
    <div class= 'pedidos'>
        <h2>PEDIDOS FINALIZADOS<h2>
    </div>
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">UNI/KG</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Data pedido</th>
                    <th scope="col">Produtos</th>
                    <th scope="col">CPF</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['nome'] . "</td>";
                    echo "<td>" . $user_data['email'] . "</td>";

                    // Verifique se as chaves existem antes de tentar acessá-las
                    echo "<td>" . (isset($user_data['pessoas']) ? $user_data['pessoas'] : '') . "</td>";
                    echo "<td>" . (isset($user_data['telefone']) ? $user_data['telefone'] : '') . "</td>";
                    echo "<td>" . (isset($user_data['dataP']) ? $user_data['dataP'] : '') . "</td>";
                    echo "<td>" . (isset($user_data['produtos']) ? $user_data['produtos'] : '') . "</td>";
                    echo "<td>" . (isset($user_data['cpf']) ? $user_data['cpf'] : '') . "</td";



                    echo "<td>
                    
                        <a class='btn btn-sm btn-danger' href='ativar.php?id=$user_data[id]' title='Ativar'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check2' viewBox='0 0 16 16'>
  <path d='M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z'/>
</svg>
                        </a>


                        
                    </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

