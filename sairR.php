<?php
session_start();

// Destrua a sessão
session_unset();
session_destroy();

// Redirecione para a página de login ou qualquer outra página desejada
header("Location: menu.php");
exit();
?>
