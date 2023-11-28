



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="fotos/logocomcirculo.png" sizes="192x192" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Página com Três Textos</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            background-color: #FFCBC5;
        }

        .logo-container {
            position: relative;
            text-align: right;
        }

        .logo-image {
            width: 200px;
            height: 90px;
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 3;
        }

        .fullscreen-image {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }

        .text-overlay {
            position: absolute;
            top: 55%;
            right: 20px;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0);
            padding: 20px;
            border-radius: 10px;
            font-size: 28px;
            color: #ffffff;
        }

        p {
            font-size: 24px;
        }

        .text {
            font-size: 28px;
            width: 30%;
            padding: 20px;
            display: inline-block;
            position: center;
            color: #000000;
        }
        .text3 {
            font-size: 28px;
            width: 30%;
            padding: 20px 30px; /* Adicione um pouco de padding-top aqui para mover o texto para cima */
            display: inline-block;
            position: center;
            color: #000000;
            top: 95%;
        }
        .text2 {
            font-size: 28px;
            width: 30%;
            padding: 20px 30px; /* Adicione um pouco de padding-top aqui para mover o texto para cima */
            display: inline-block;
            position: center;
            color: #fff;
            top: 95%;
        }

        .text.left {

            margin: 3px;
            text-align: left;
            background-color: #FFCBC5;
        }

        .text.center {
            text-align: center;
            background-color: #FFCBC5;
        }

        .text.right {
            text-align: right;
            background-color: #FFCBC5;
        }

        .button-container {
            
            text-align: center;
            
        }
        .button2 {
            
  


            background-color: #2ecc7000;
            color: #000000;
            border: 2px solid #e48531;
            padding: 15px 30px;
            margin: 10px;
            cursor: pointer;
            font-size: 24px;
            border-radius: 10px;
        }
        .button2:hover{
            background-color: #e48531;
            color: #ffffff;
            transform: translateY(-5px); /* Move o botão 5 pixels para cima quando o cursor passar por cima */
        }

        .button {
            
  


            background-color: #2ecc7000;
            color: #fff;
            border: 2px solid #2ecc71;
            padding: 15px 30px;
            margin: 10px;
            cursor: pointer;
            font-size: 24px;
            border-radius: 10px;
        }
        .button:hover{
            background-color: #2ecc71;
            color: #000000;
            transform: translateY(-5px); /* Move o botão 5 pixels para cima quando o cursor passar por cima */
        }

        .image-container {
            
            background-color: #030f0b;
            text-align: center;
         margin-bottom: -40px;
          

        }
        .image-container2 {
            background-color: #ffffff;
            text-align: center;
         margin-bottom: -40px;
          

        }

        .image {
            width: 460px;
            height: 460px;
            margin: 50px;
            margin-right: 20px; /* Adicionar margem direita de 20px entre as imagens */
    margin-bottom: 20px; /* Adicionar margem inferior de 20px entre as imagens */
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            margin-top: 20px;
            margin-left: 20px;
            padding: 15px 30px;
            background-color: #ffcbc500;
            color: #fff;
            text-decoration: none;
            border: 2px solid #FFCBC5;
            border-radius: 15px;
            cursor: pointer;
            font-size: 24px;
        }

        .back-button:hover {
            color: #000000;
            background-color: #FFCBC5;
        }

        .nossamissao2 {
            margin: 0;
            background-color: #FFCBC5;;
            margin-top: 0;
            margin-bottom: 0;
            text-align: center;
            
        }
        .nossamissao1 {
           margin: 0;
            background-color: #FFCBC5;
            margin-top: 0;
            margin-bottom: 0; 
            margin-left: 40px;
         }
         .nossamissao1 h1{
            text-align: center;
            font-size: 45px;
         }
         .bi-piggy-bank{
            margin-left: 140px;
           
            font-size: 70px;

         }
         .text.left h2{
            margin-left: 70px;
            
         }
         .bi-envelope-paper-heart{
            margin-left: 10px;
           
           font-size: 70px;
         }
        .bi-arrow-repeat{
            margin-right: 110px;
           
           font-size: 70px;

        }
        .text.right h2{
            margin-right: 80px;
        }



     .icon:hover{
        transform: scale(1.1); /* Aumenta o tamanho em 10% quando o mouse passar por cima */
       }

       .nossamissao1 {
    display: flex;
    align-items: center;
}

.nossamissao-image {
    flex: 0 0 auto; /* Define a largura automática */
    margin-right: 20px; /* Adiciona um espaço entre a imagem e o texto */
}

.nossamissao-text {
    flex: 1; /* Preenche o espaço disponível */
}










#post-container {
            display: flex;
            justify-content: center;
        }

        .post {
            margin: 0px;
            padding: 10px;
            border: 0px solid #000;
            display: flex;
            font-size: 28px;
        }

        .post-image {
            max-width: 300px;
            height: auto;
            margin-right: 10px;
        }

        .post-text {
            color: #000;
            flex: 1;
            font-size: 28px;
        }

        .post-link {
            display: block;
        }

        .post-button {
            background-color: #000;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }
        .adm {
        
        background-color: #5a4838; /* Cor de fundo */
        color: white; /* Cor do texto 5a4838 */
        padding: 10px 20px; /* Espaçamento interno */
        border: none; /* Removendo a borda padrão */
        border-radius: 5px; /* Borda arredondada */
        cursor: pointer; /* Ícone de cursor de mão ao passar o mouse */
        position: absolute;
        
        right: 10px;
  
      }
  
      /* Estilo quando o mouse passa por cima do botão */
      .adm:hover {
          background-color: #000; /* Nova cor de fundo no hover */
        color: #fff; /* Nova cor do texto no hover */
      }
      @media only screen and (max-width: 200px) {
        .text {
            width: 100%; /* Para dispositivos menores, ocupa toda a largura */
        }
    }









         button {
            padding: 10px 20px;
            font-size: 24px;
            background-color: #ffcbc500;
            color: #5a4838;
            border: 2px solid  #5a4838;
            border-radius: 15px;
            cursor: pointer;



            
        }
        button:hover {
            color: #FFCBC5;
            background-color: #5a4838;
        }

        #aviso-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Fundo semi-transparente */
            backdrop-filter: blur(5px); /* Efeito de desfoque */
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        #aviso {
          color: #5a4838;
          text-align: justify;
          border-radius: 8px;
            position: relative;
            padding: 20px;
            background-color: #e3aeaa;
          
            box-shadow: 0 0 10px rgb(90, 72, 56);
            z-index: 1001;
        }

        #fechar {
            position: absolute;
            top: 5px;
            right: 5px;
            cursor: pointer;
        }
        #imagem-aviso {
          max-width: 100px; /* Defina a largura máxima desejada */
            max-height: 100%; /* Ajusta a altura automaticamente */
            height: auto;
            margin-left: 10px; /* Adiciona um espaçamento à direita */
        }
        .borda{
          border: 3px dashed #5a4838;
          margin: 10px;
          border-radius: 8px;
        }
        .borda2{
         
          margin: 10px;
        }
        h1{
          text-align: center;
        }

      
   
        
    </style>
</head>
<body>
    <a href="menu.php" class="back-button"><i class="bi bi-arrow-left"></i>  Voltar</a>
    <div class="logo-container">
        <img src="fotos/looogooo.png" class="logo-image">
    </div>
    <img class="fullscreen-image" src="fotos/bannerong.jpg" alt="Imagem em Tela Cheia">
    <div class="text-overlay">
        <h1>ADOTE UMA
            <BR> VIDA, ADOTE
                <BR> UM CARINHO.</h1>
        <p>São mais de 30 milhões de 
            <BR>animais esperando um lar cheio de afeto, respeito e amor.</p>
    </div>
    
    <div class="nossamissao1">
    <div class="nossamissao-image">
        <img src="fotos/nseisecomento.png" alt="Imagem da Missão" width="200px"/>
    </div>
    <div class="nossamissao-text">
        <h1>Nossa Missão</h1>
        <p>A nossa confeitaria não é apenas um lugar para saborear deliciosos bolos e doces, mas também um espaço comprometido com uma causa importante: a defesa dos direitos dos animais. A nossa missão é divulgar e apoiar Organizações Não Governamentais (ONGs) que trabalham incansavelmente para proteger e cuidar dos animais em situações de vulnerabilidade.</p>
    </div>
</div>

    
   
    
    <div class="nossamissao2">
        <H1>VOCÊ TAMBÉM PODE AJUDAR COM ESSA CAUSA</H1>
        <div class="text left">
            <div class="icon">
            
            <i class="bi bi-piggy-bank"></i>
        </div>
            <h2>DOAÇÕES</h2>
            <p>Com as doações, ongs conseguem cuidar de animais carentes, potencializar projetos, criar campanhas de conscientização e desenvolver ações especiais.</p>
           <BR>
            
        </div>

        <div class="text center">
            <div class="icon">
            <i class="bi bi-envelope-paper-heart"></i>
        </div>
            <h2>APADRINHE</h2>
            <p>O apadrinhamento de um cão é uma forma de conseguirmos recursos fixos para ajudar na tarefa diária de cuidar de nossos animais, além de ter mais tranquilidade e poder planejar melhor nossas ações.</p>
        </div>
        <div class="text right">
            <div class="icon">
            <i class="bi bi-arrow-repeat"></i>
        </div>
            <h2>APOIE</h2>
            <p>ONGS contam com a ajuda de diversas pessoas, celebridades, personalidades e marcas com propósito para salvar e tirar os animais das ruas. Você também pode fazer parte deste grupo e apoiar essa luta.</p>
        </div>
        <button onclick="mostrarAviso()">QUERO DIVULGAR!</button>

<div id="aviso-wrapper">
    <div id="aviso">
      <div class="borda">
        <div id="fechar" onclick="fecharAviso()" style="font-size: 28px;">X</div>
        <div class="borda2">
          <h1>DIVULGAÇÃO</h1>
        <h3>
        <p>Contato: divulgacoes@auucakes.com  <i class="bi bi-envelope"></i></p>
       Assunto: Divulgação (Nome da sua ONG)
<p></p>
          A "caucakes" é uma ONG dedicada ao bem-estar 
          <br>e proteção dos animais. (Uma pequena descrição <br>falando sobre a causa)
          <p></p>
          ong.org (Link de contato) 
        </H3> <img id="imagem-aviso" src="fotos/AVISO.png" alt="Imagem de aviso"><h4>​(Foto de representação da ONG)</h4></div>
      </div>
    </div>
</div>

<script>
    function mostrarAviso() {
        document.getElementById('aviso-wrapper').style.display = 'flex';
    }

    function fecharAviso() {
        document.getElementById('aviso-wrapper').style.display = 'none';
    }
</script>
    </div>
    



       
    </div>

<p><p><p><p><p>




    <div id="post-container">
        <div id="posts"></div>
    </div>
    
    <script>
        const postsArray = JSON.parse(localStorage.getItem("postsArray")) || [];

        const postsContainer = document.getElementById("posts");

        postsArray.forEach(postData => {
            const post = document.createElement("div");
            post.className = "post";
            post.style.backgroundColor = postData.bgColor;

            const img = document.createElement("img");
            img.src = postData.img;
            img.className = "post-image";

            const postTextElem = document.createElement("p");
            postTextElem.textContent = postData.text;
            postTextElem.style.color = postData.color;
            postTextElem.className = "post-text";

            const postLinkElem = document.createElement("a");
            postLinkElem.href = postData.link;
            postLinkElem.textContent = "Saiba Mais";
            postLinkElem.className = "post-link";
            postLinkElem.style.color = postData.btnColor;

            post.appendChild(img);
            post.appendChild(postTextElem);
            post.appendChild(postLinkElem);

            postsContainer.appendChild(post);
        });
    </script>
    <footer style="background-color: #5a4838; text-align: center; padding: 50px;">
    <p style="color: #1e1813; font-size: 16px;">&copy; 2023 AuCakes - Todos os direitos reservados. 
    </p>
    <p style="color: #1e1813; font-size: 16px; text-align: right; margin-top: -60px;"> DESEJA DIVULGAR SUA ONG:<p style="color: #1e1813; font-size: 16px;  text-align: right; ">
divulgacoes@auucakes.com
    </p>
    

    <i class="bi bi-instagram"></i>
    <i class="bi bi-facebook"></i>
   <div class='rodape'>
   <p style="color: #1e1813; font-size: 16px; text-align: left; margin-top: -60px;"> Sabado e Domingo: 10:00 - 16:00   </p>
   <p style="color: #1e1813; font-size: 16px;  text-align: left; margin-top: -60px;">
   Segunda a Sexta: 08:00 - 18:00
   </p>
   <p style="color: #1e1813; font-size: 16px;  text-align: left; margin-top: -60px; ">
   Horario de funcionamento
   
    </p>
   

    </div>
   
</footer>
</body>
</html>





































