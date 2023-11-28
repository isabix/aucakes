<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pedido</title>
    <link rel="icon" href="fotos/logocomcirculobranca.png" sizes="192x192" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Tela de pedido</title>
</head>
<style>

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column; 
        align-items: center; 
        min-height: 100vh;
        background-image: url('fotos/escorrendo.png');
        background-size: cover;
        background-repeat: no-repeat; 
    }
    h3{
      font-size: 25px;
        cursor: pointer;
        color: #5a4838;
    }

    div i {
        font-size: 30px;
        cursor: pointer;
        color: #5a4838;
    }

    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px;
        position: absolute;
        bottom: 0;
        width: 100%;
        margin: 0 auto;
    }
</style>
<body>
    <div class="image-between-buttons">
        <div class="divider"></div>
        <a class="back-button" href="menu.php">Voltar</a>
        <div class="divider"></div>
        <img src="fotos/logocomcirculobranca.png" width="150px" height="150px">
        <div class="divider"></div>
    </div>
    <div class="container">
        <h2><i class="bi bi-check-circle"></i> PEDIDO ENVIADO COM SUCESSO</h2>
        <h3>
      Em breve entraremos em contato
        <p>Qualquer dúvida, entre em contato:</p>
        <p><i class="bi bi-whatsapp"></i> (41) 9 9999-9999</p>
        <p><i class="bi bi-instagram"></i> @AuCakees</p>
  </h3>
    </div>
    <script src="site.js"></script>
</body>
</html>
