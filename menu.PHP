




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | AuCakes</title>
    
<link rel="icon" href="fotos/chocho.png" sizes="192x192" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body {
            background-color: #e3aeaa;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }

        .container {
            background-color: #facfce;
            padding: 20px;
            text-align: center;
           

        }
        .container img {
            width: 280px;
            height: 70px;
            vertical-align: middle;
            display: inline-block; 
            margin-right: 890px;
            margin-bottom: 20px;
        }
        
        .top-buttons {
            align-items: center;
            margin-bottom: 20px;
            margin-top: -65px;
        }

        .top-buttons a {
            text-decoration: none;
            color: #000000;
            font-size: 18px;
            margin-right: 40px; /* Espaçamento entre os botões */
            padding: 5px 10px;
            background-color: #a632f300;
            border-radius: 10px;
            transition: text-decoration 0.3s;
            font-weight: 700;
        }

        .top-buttons a:hover {
         
            text-decoration: underline #8aa6a3; /* Adiciona uma linha inferior quando o cursor passa por cima */
            text-decoration-thickness: 5px;
        }
       

      
      
       
        .distancia1{
            margin-left: 85px;
        }
        .distancia2{
        margin-left: 850px;
        margin-top: -28px;
      
        }

        .bi-arrow-up-short{
        color: #000000;
        font-size: 50px;
    
        }
        .bi-box-arrow-in-right{
            color: #000000;
            font-size: 25px;
        
        
        }
        .bi-person-circle{
        color: #000000;
        font-size: 25px;

        }
        .text3 {
        margin-left: 85px;
        font-size: 22px;
        flex: 1;
        padding: 20px;
        }

        .image3 {
            margin-top: -250px;
            flex: 1;
            text-align: right;
        }

     .bi-cake2{
        
        font-size: 200px;
        margin-right: 80px;
     }
     .text3 h1{
        margin-left: 90px;
     }
     .text4 {
        flex: 1;
            padding: 20px;
            text-align: right;
            margin-right: 85px;
        font-size: 22px;
        margin-top: -250px;
        }

        .image4 {
            flex: 1;
            text-align: left;
        }

     .bi-cake2{
        
        font-size: 200px;
        margin-right: 80px;
     }
     .text3 h1{
        margin-left: 90px;
     }
   
.bi-cookie{
    font-size: 200px;
        margin-left: 80px;
}
.carousel-container {
   
  

            overflow: hidden;
        }

        .carousel-slider {
            
            display: flex;
            transition: transform 1s ease; /* Transição suave para a mudança de imagens */
        }

        .carousel-slide {
            
            flex: 0 0 auto;
            width: 100vw; /* Largura total do viewport */
        }


        /* Estilo para as quatro imagens em linha */
.quadro-de-imagens {
    display: flex;
    justify-content: space-between; /* Distribui as imagens igualmente */
    align-items: center; /* Alinha verticalmente no centro */
    margin-top: 20px; /* Adicione margem acima das imagens */
}

.quadro-de-imagens img {
    width: calc(25% - 10px); /* 25% de largura e algum espaçamento */
    max-height: 380px; /* Altura máxima das imagens */
}
 .margem{
    margin: 20px;
 }


 .rodape img{
    width: 100px; /* Largura desejada */
            height: 80px; /* Altura desejada */
            margin-left: -920px;
            margin-top: -75px;
            
 }


         /* Estilizando o botão */
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
    .imageee {
      flex: 1;
      max-width: 50%; /* Ajuste a largura da imagem conforme necessário */
    }

    .texttt {
        margin: 20px;
        padding-left: 100px; /* Adiciona preenchimento de 20 pixels à esquerda */
        font-size:21px;
        background-color: #bf6e7d; /* Nova cor de fundo no hover */
        width: 550px;
        text-align: justify;
        margin-top: -580px;
      flex: 1;
      margin-left:580px;
      box-shadow: 20px 20px #78454e; /* Adiciona uma sombra sólida preta */
    
    }
    .texttt2 p{
        margin:30px;
       
    }
    .top-buttons a {
  text-decoration: none;
  padding: 0 10px;
  position: relative;
}

.top-buttons a:not(:last-child)::after {
  content: "|";
  position: absolute;
  right: -15px;
  font-size: 1.2em; /* Aumenta o tamanho da linha */
}








    /* Global */
    body {
            background-color: #e3aeaa;
            margin: 0;
            padding: 0;
        }

        /* Galeria */
        .gallery {
            position: relative;
            width: 100%;
            height: 50vh; /* Ajuste a altura conforme necessário */
            max-height: 28vw;
            overflow: hidden;
            margin-top: 20px; /* Ajuste a margem conforme necessário */
        }

        .gallery__stream {
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            height: 100%;
        }

        .gallery__item {
            position: absolute;
            width: 50%;
            height: 100%;
            transition: 1s all ease;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            border-radius: 5px;
        }

        .gallery__item:nth-child(1) {
            left: 0;
            z-index: 1;
            transform: translateX(-100%) scale(.8);
        }

        .gallery__item:nth-child(2) {
            left: 0;
            z-index: 2;
            transform: translateX(-50%) scale(.8);
        }

        .gallery__item:nth-child(3) {
            left: 50%;
            z-index: 4;
            transform: translateX(-50%) scale(1);
        }

        .gallery__item:nth-child(4) {
            left: 100%;
            z-index: 2;
            transform: translateX(-50%) scale(.8);
        }

        .gallery__item:nth-child(n+5) {
            left: 100%;
            z-index: 1;
            transform: scale(.8);
        }

        /* Backgrounds */
        .bg-1 {
            border-radius:30px;
            background-image: url(fotos/slide1.jpg);
        }

        .bg-2 {
            border-radius:30px;
            background-image: url(fotos/slide2.jpg);
        }

        .bg-3 {
            border-radius:30px;
            background-image: url(fotos/slide3.jpg);
        }

        .bg-4 {
            border-radius:30px;
            background-image: url(fotos/slide4.jpg);
        }

        .bg-5 {
            border-radius:30px;
            background-image: url(fotos/slide1.jpg);
        }

        .bg-6 {
            border-radius:30px;
            background-image: url(fotos/slide2.jpg);
        }

        .bg-7 {
            border-radius:30px;
            background-image: url(fotos/slide3.jpg);
        }

        /* Controles */
        .gallery__prev,
        .gallery__next {
            position: absolute;
            top: 50%;
            z-index: 4;
            width: 50%;
            height: 100%;
            transform: translateX(-50%) translateY(-50%) scale(.8);
            cursor: pointer;
        }

        .gallery__prev {
            left: 0;
        }

        .gallery__next {
            left: 100%;
        }

        /* Sombras */
        .gallery:before,
        .gallery:after {
            display: block;
            content: "";
            position: absolute;
            top: 0;
            width: 20%;
            height: 100%;
            z-index: 3;
        }

        .gallery:before {
            left: 0;
            background: linear-gradient(to right, #e3aeaa 0%, rgba(0, 0, 0, 0) 100%);
            backdrop-filter: blur(4px); /* Blur mais leve */
            filter: blur(4px); /* Fallback para navegadores que não suportam backdrop-filter */
        }

        .gallery:after {
            right: 0;
            background: linear-gradient(to left, #e3aeaa 0%, rgba(0, 0, 0, 0) 100%);
            backdrop-filter: blur(4px); /* Blur mais leve */
            filter: blur(4px); /* Fallback para navegadores que não suportam backdrop-filter */
        }
        .icones {
            position: relative;
            display: flex;
            justify-content: center;
            gap: 190px; /* Espaço entre as imagens */
            margin-top: 20px; /* Ajuste a margem conforme necessário */
        }

        .icones img {
            width: 80px; /* Ajuste a largura conforme necessário */
            height: 70px; /* Mantém a proporção da imagem */
            position: relative;
            z-index: 1; /* Certifica-se de que os ícones estão acima da imagem pata.png */
        }

       

      
        hr {
            border: 1px dashed #78454e;
            margin: 20px 0;
        }
        .continuacao {
    margin: 20px auto; /* auto for left and right margins will center the div horizontally */
    font-size: 21px;
    background-color: #bf6e7d;
    width: 550px;
    text-align: justify;
    flex: 1;
    box-shadow: 20px 20px #78454e;
}

       .continuacao p{
        margin: 20px;
       }
       .galeria h2{
        font-size: 40px;
        text-align: center;
        font-weight: 200px;
       }
       @keyframes blink {
            0% {
                text-shadow: 14px 4px 4px rgba(191, 110, 125, 0.5);
            }
            50% {
                text-shadow: none;
            }
            100% {
                text-shadow: 14px 4px 4px rgba(191, 110, 125, 0.5);
            }
        }

        .oongs {
            font-size: 100px;
            font-weight: bold;
            margin-left: 500px;
            color: #78454e;
            animation: blink 1s infinite; /* Define a animação 'blink' com duração de 1 segundo e repetição infinita */
        }
    </style>
    </style>
</head>
<body>
    <div class="container">
        <img src="fotos/looogooo.png" href='menu.php'width="450px" height="450px">
        <div class="distancia1">
        <div class="top-buttons">
           

            <a href="ongs.php">ONGS</a>
            <a href="menu.php">AUCAKES</a>
            <a href="cardapiobolos.php">CARDÁPIO</a>
            <div class="distancia2" style="margin-top:-28px;">
           
           
            <a href='cadastro.php'><i class='bi bi-person-circle'></i> FAÇA SUA ENCOMENDA</a>
    </div>
   
          
              
              
              
            
        </div>
        </div>
        </div>
    </div>
    <div class="carousel-container">
        <div class="carousel-slider">
            <div class="carousel-slide">
                <img src="fotos/carrosel1.png" alt="Imagem 1">
            </div>
            <div class="carousel-slide">
                <img src="fotos/carrosel2.png" alt="Imagem 2">
            </div>
            <div class="carousel-slide">
                <img src="fotos/carrosel3.png" alt="Imagem 3">
            </div>
        </div>
    </div>
    <br>
    <br> <br> <br>
    <img class="imageee" src="fotos/bolo4.png" alt="Minha Imagem" style="  width: 350px; margin-left:300px; margin-top: -40px; ">
    <br> <br> <br>  <br> <br> <br>  <br> <br> <br>  <br> <br> <br>  <br> <br> <br>
    <div class="texttt">
        <div class="texttt2">
            <br> 
           
      <p>Na AUCakes, somos muito mais do que uma confeitaria. Somos uma comunidade dedicada a 
      compartilhar a alegria de doces e salgados, enquanto cumprimos uma missão importante.
      Somos apaixonados por criar deliciosas iguarias, mas também acreditamos firmemente 
      que podemos fazer a diferença em nossa comunidade. É por isso que nossa confeitaria 
      tem um propósito especial: a divulgação de ONGs.</p>
     
      <br> 
    </div>
    </div>

    <br>

<br> <br>
<hr><hr>





    <br>

    <br>

<br>
<div class="icones">
        <img src="fotos/iconbolo.png" alt="Minha Imagem">
        <img src="fotos/iconcookie.png" alt="Minha Imagem">
        <img src="fotos/iconbebida.png" alt="Minha Imagem">
        <img src="fotos/iconsalgado.png" alt="Minha Imagem">
    </div>
    <div style=" align-items: flex-start;">
        <div class="continuacao">
            <br><br>
            ------------------------------------------------------------------------------
            <p>Por semana, destacamos ONGs diferentes em nossa loja. Compartilhamos sua história, missão e necessidades com nossos clientes, incentivando a conscientização e o apoio. Também reservamos uma parte de nossos lucros para doações diretamente às ONGs em destaque. Nossa equipe e clientes têm a oportunidade de se envolver ativamente em ações sociais, seja através de voluntariado ou arrecadação de fundos.</p>
            ------------------------------------------------------------------------------
            <br><br>
        </div>
        <p style="writing-mode: vertical-rl; transform: rotate(180deg); font-size: 100px; font-weight: bold; margin-left: 20px; margin-top: -480px; color:#bf6e7d;">AUCAKES</p>
        <p style="writing-mode: vertical-rl; transform: rotate(180deg); font-size: 100px; font-weight: bold; margin-left: 20px; margin-top: -480px; color:#78454e;">AUCAKES</p>
        <br><br>  <br><br>
        <p style="writing-mode: vertical-rl; transform: rotate(180deg); font-size: 100px; font-weight: bold; margin-left: 200px; margin-top: -480px; color:#bf6e7d;">AUCAKES</p>
        <p style="writing-mode: vertical-rl; transform: rotate(180deg); font-size: 100px; font-weight: bold; margin-left: 200px; margin-top: -480px; color:#78454e;">AUCAKES</p>

        
    </div>
    
    

<HR>
   
    <script src="slide.js"></script>
    <script>
        // JavaScript para o carrossel
        const carouselSlider = document.querySelector('.carousel-slider');
        const slides = document.querySelectorAll('.carousel-slide');
        let currentIndex = 0;
        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            const translateX = -currentIndex * 100; // Largura total do viewport
            carouselSlider.style.transform = `translateX(${translateX}vw)`;
        }
        function prevSlide() {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            const translateX = -currentIndex * 100; // Largura total do viewport
            carouselSlider.style.transform = `translateX(${translateX}vw)`;
        }
        setInterval(nextSlide, 3000); // Troca de imagem a cada 2 segundos
    </script>












    



<script>
  document.addEventListener('DOMContentLoaded', function() {
    // O código vem aqui
});
document.addEventListener('DOMContentLoaded', function() {
  var stream = document.querySelector('.gallery__stream');
  var items = document.querySelectorAll('.gallery__item');
  var prev = document.querySelector('.gallery__prev');
  var next = document.querySelector('.gallery__next');
});
document.addEventListener('DOMContentLoaded', function() {
  var stream = document.querySelector('.gallery__stream');
  var items = document.querySelectorAll('.gallery__item');
  var prev = document.querySelector('.gallery__prev');
  var next = document.querySelector('.gallery__next');

  prev.addEventListener('click', function() {
    stream.insertBefore(items[items.length - 1], items[0]);
    items = document.querySelectorAll('.gallery__item');
  });

  next.addEventListener('click', function() {
    stream.appendChild(items[0]);
    items = document.querySelectorAll('.gallery__item');
  });
});




</script>



        <p class="oongs" style=" font-size: 100px; font-weight: bold; margin-left: 500px;; color:#78454e;  text-shadow: 14px 14px 14px #bf6e7d; ">ONGS</p>


<div class="gallery">

  <div class="gallery__prev"></div>
  <div class="gallery__next"></div>
  <div class="gallery__stream">
  <a href="https://amparanimal.org.br/" class="gallery__item bg-1"></a>
    <a href="https://ongsoscidadaniaanimal.org/" class="gallery__item bg-2"></a>
    <a href="http://probem.org/" class="gallery__item bg-3"></a>
    <a href="https://www.caosemdono.com.br/" class="gallery__item bg-4"></a>
    <a href="https://amparanimal.org.br/" class="gallery__item bg-5"></a>
    <a href="https://ongsoscidadaniaanimal.org/" class="gallery__item bg-6"></a>
    <a href="http://probem.org/" class="gallery__item bg-7"></a>
  </div>

</div>



<br><br><br><br>




     <footer style="background-color: #5a4838; text-align: center; padding: 50px;">
    <p style="color: #1e1813; font-size: 16px;">&copy; 2023 AuCakes - Todos os direitos reservados. 
    </p>
    
    <p style="color: #1e1813; font-size: 16px; text-align: right; margin-top: -60px;"> Dúvidas e informações:<p style="color: #1e1813; font-size: 16px;  text-align: right; ">
    contato@auucakes.com
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
    <a href="login.php">
  <button class="adm"><i class="bi bi-pc-display-horizontal"></i></button>
</a>

    </div>
   
</footer>




</body>
</html>



