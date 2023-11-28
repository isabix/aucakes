<?php
$servername = "localhost";  // Endereço do servidor de banco de dados
$username = "root";  // Nome de usuário do banco de dados
$password = "";    // Senha do banco de dados
$database = "auucakes";  // Nome do banco de dados

// Conectar ao banco de dados
$conexao = mysqli_connect($servername, $username, $password, $database);

// Verificar a conexão
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>

