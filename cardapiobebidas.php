<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="fotos/logocomcirculobranca.png" sizes="192x192" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Tela com Colunas e Fileiras de Fotos</title>
    
    <style>
   
        body {
            font-family: Arial, sans-serif;
            background-color: #64CFD3;
            margin: 0;
            padding: 0;
            overflow-x: hidden;

        }

        .container-top {
            background-color: #facfce;
            color: #fff;
            padding: 20px;
            text-align: center;
       
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
  font-size: 1.2em; 
}
        
        .container-top img {
            width: 280px;
            height: 70px;
            vertical-align: middle; 
            display: inline-block; 
            margin-right: 890px;
            margin-bottom: 20px;
        }
       

        .row {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-bottom: 20px;
            margin: 0;
        }

        .column {
            flex: 1;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            border-radius: 40px;
            margin: 20px; 
          
        }
        .bolos:hover {
            transform: scale(1.1);
        }
        .preco:hover {
            transform: scale(1.1);
        }

        .column img {
            max-width: 100%;
            height: auto;
        }

        .description {
            margin-top: 10px;
        }

        .preco-container {
            margin-top: 10px;
        }

        .preco {
            padding: 10px 35px;
            background-color: #64CFD3;
            color: #000;
            border: none;
            cursor: pointer;
            border-radius: 30px;
            width: 50px;
            
        }
        .description{
           font-family: Verdana, Geneva, Tahoma, sans-serif;
           color: #cf7dcf;
           font-size: larger;
        }
       

    
        .bi-whatsapp {
            font-size: 20px; 
            margin-left: 80px;
            
             color: #000000;
        }
        img[src="BANER.png"] {
            width: 100%;
}
 .colunas{
    margin: 40px;
 }

.botao-direita {
    position: fixed;
    bottom: 20px; 
    right: 20px; 
}


.botao-direita  {
    padding: 10px 20px;
   
    border: none;
    cursor: pointer;
    border-radius: 30px;
    
}


.botao-direita:hover {
    transform: scale(1.1);
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
            margin-right: 40px; 
            padding: 5px 10px;
            background-color: #a632f300;
            border-radius: 10px;
            transition:  text-decoration 0.3s;
            font-weight: 700;
        }

        .top-buttons a:hover {
            text-decoration: underline #8aa6a3; 
            text-decoration-thickness: 5px;
        }
       
.botao-menu {
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
        }


        .menu {
            display: none;
            position: absolute;
            background-color: #f1f1f100;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            
           
        }


        .menu a {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            color: #000000;
        }

  
        .menu a:hover {
            background-color: #dcb7e0;
        }


        .botao-menu:focus + .menu {
            display: block;
            position: relative;
        }
        .distancia1{
            margin-left: 85px;
        }
    .distancia2{
        margin-left: 850px;
        margin-top: -28px;
      
    }
    .bi-box-arrow-in-right{
    color: #000000;
    font-size: 25px;
   
   
}
    .bi-person-circle{
        color: #000000;
    font-size: 25px;

    }

.banner-buttons {
    text-align: center; 
    margin-top: 20px;
}


.botao-banner {
    margin-right: 80px;
    background-color: #00000000;
    border: 1px dashed #411005; 
    padding: 12px 20px; 
    border-radius: 50px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s; 
    text-decoration: none; 
    color: #ffffff; 
    font-size: 24px; 
    font-family: Arial, sans-serif; 
}


.botao-banner:hover {
    background-color: #411005;
    color: #64CFD3;

}
.bi-cookie, .bi-cake2, .bi-cup-straw, .bi-egg-fried{
   
  
    font-size: 25px;
}
.banner-text {
    color: #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
   
    padding: 20px;
    border-radius: 10px;
}

.banner-text h1 {
   
    font-size: 52px;
    margin: 0;
}

.banner-text p {
    font-size: 20px;
    margin: 10px 0;
}
   

.rodape img{
    width: 150px; /* Largura desejada */
            height: 150px; /* Altura desejada */
            margin-left: -920px;
            margin-top: -75px;
            
 }
 .produtos{
       font-size:20px;
    margin-left: 290px;
    }
   
    .banner-image{
    width: 100%;
            height: auto;
            display: block; /* Remove margens indesejadas */
            margin: 0 auto; /* Centraliza a imagem horizontalmente */
}
    


    </style>
</head>
<body>
    <div class="container-top">
        <div class="container">
            <img src="fotos/looogooo.png" width="450px" height="450px">
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
            
        










        <div class="botao-direita">
             <i class="bi bi-whatsapp" >TIRE SUAS DÚVIDAS</i>
        </div>

         
        







        </div>
    </div>
    <div class="container">
        
        <img src="fotos/BANERbebidas.png" class="banner-image">
        <div class="banner-text">
            <h1>BEBIDAS</h1>
            <p>Desfrute de um Mundo de Sabores com Nossas Bebidas.</p>
        </div>

     <div class="banner-buttons">
        <!-- Botão 1 -->
        <a href="cardapiobolos.php" class="botao-banner">
            BOLOS
            <i class="bi bi-cake2"></i>
        </a>
        
        <!-- Botão 2 -->
        <a href="cardapiocookie.php" class="botao-banner">
            COOKIES
            <i class="bi bi-cookie">
           </i>
        </a>
        
        <!-- Botão 3 -->
        <a href="cardapiobebidas.php" class="botao-banner">
            BEBIDAS
            <i class="bi bi-cup-straw"></i>
        </a>

        <a href="cardapiosalgados.php" class="botao-banner">
            SALGADOS
            <i class="bi bi-egg-fried"></i>
        </a>
    </div>
    
     <div class="colunas">
        <div class="row">
            <div class="column">
            <div class='produtos'>
                #19
</div>
                <div class="bolos">
                <img src="fotos/bebida1.png" alt="Foto 1" width="11180px">
            </div>
                <div class="description">FRAMBOESA</div>
                <div class="button-container">
                    <div class="preco" button>R$12,00</button>
                    </div>
                    
                </div>
            </div>
            <div class="column">
            <div class='produtos'>
                #20
</div>
                <div class="bolos">
                <img src="fotos/bebida2.png" alt="Foto 2">
            </div>
                <div class="description">MAÇA VERDE</div>
                <div class="button-container">
                    <div class="preco" button>R$11,50</button>
                    </div>
                </div>
            </div>
            <div class="column">
            <div class='produtos'>
                #21
</div>
                <div class="bolos">
                <img src="fotos/bebida3.png" alt="Foto 3">
            </div>
                <div class="description">PINK LEMONADE</div>
                <div class="button-container">
                    <div class="preco" button>R$11,75</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
            <div class='produtos'>
                #22
</div>
                <div class="bolos">
                <img src="fotos/bebida4.png" alt="Foto 4">
            </div>
                <div class="description">LIMÃO SICILIANO</div>
                <div class="button-container">
                    <div class="preco" button>R$11,25</button>
                    </div>
                </div>
            </div>
            <div class="column">
            <div class='produtos'>
                #23
</div>
                <div class="bolos">
                <img src="fotos/bebida5.png" alt="Foto 5">
            </div>
                <div class="description">COOKIE SHAKE</div>
                <div class="button-container">
                    <div class="preco" button>R$13,00</button>
                    </div>
                </div>
            </div>
            <div class="column">
            <div class='produtos'>
                #24
</div>
                <div class="bolos">
                <img src="fotos/bebida6.png" alt="Foto 6">
            </div>
                <div class="description">MILK SHAKE</div>
                <div class="button-container">
                    <div class="preco" button>R$12,50</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
            <div class='produtos'>
                #25
</div>
                <div class="bolos">
                <img src="fotos/bebida7.png" alt="Foto 4">
            </div>
                <div class="description">MALCHENEY</div>
                <div class="button-container">
                    <div class="preco" button>R$12,75</button>
                    </div>
                </div>
            </div>
            <div class="column">
            <div class='produtos'>
                #32
</div>
                <div class="bolos">
                <img src="fotos/bebida8.png" alt="Foto 5">
            </div>
                <div class="description">MUD FRAPPÉ</div>
                <div class="button-container">
                    <div class="preco" button>R$13,25</button>
                    </div>
                </div>
            </div>
            <div class="column">
            <div class='produtos'>
                #33
</div>
                <div class="bolos">
                <img src="fotos/bebida9.png" alt="Foto 6">
            </div>
                <div class="description">CHOCOLATE GELADO</div>
                <div class="button-container">
                    <div class="preco" button>R$12,50</button>
                    </div>
                </div>
            </div>
        </div>
      
        </div>
    </div>
    </div>
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
   

    </div>
   
</footer>
</body>
</html>
