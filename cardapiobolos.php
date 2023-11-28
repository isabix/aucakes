




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
            background-color: #d4aca9;
            margin: 0;
            padding: 0;
            overflow-x: hidden;

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

        .container-top {
            background-color: #facfce;
            color: #fff;
            padding: 20px;
            text-align: center;
           
        }
        
        .container-top img {
            width: 280px;
            height: 70px;
            vertical-align: middle; /* Alinha verticalmente no meio */
            display: inline-block; /* Torna a imagem um elemento inline-block */
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
            margin: 20px; /* Adiciona margem para criar espaço entre as colunas */
          
        }
      
        .bolos:hover {
            transform: scale(1.1); /* Aumenta o tamanho em 10% quando o mouse passar por cima */
        }
        .preco:hover {
            transform: scale(1.1); /* Aumenta o tamanho em 10% quando o mouse passar por cima */
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
            background-color: #e3aeaa;
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
       

        /* Aumenta o tamanho do ícone do WhatsApp */
        .bi-whatsapp {
            font-size: 20px; /* Ajuste o tamanho do ícone aqui */
            margin-left: 80px;
            
             color: #000000;
        }
        img[src="BANER.png"] {
            width: 100%; /* Faz a imagem do banner ocupar 100% da largura do contêiner pai */
}
 .colunas{
    margin: 40px;
 }
 /* Estilo para o botão à direita */
.botao-direita {
    position: fixed;
    bottom: 20px; /* Distância do fundo da tela */
    right: 20px; /* Distância da direita da tela */
}

/* Estilo para o botão */
.botao-direita  {
    padding: 10px 20px;
   
    border: none;
    cursor: pointer;
    border-radius: 30px;
    
}

/* Efeito de hover para o botão */
.botao-direita:hover {
    transform: scale(1.1); /* Aumenta o tamanho em 10% quando o mouse passar por cima */
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
            transition:  text-decoration 0.3s;
            font-weight: 700;
        }

        .top-buttons a:hover {
            text-decoration: underline #8aa6a3; /* Adiciona uma linha inferior quando o cursor passa por cima */
            text-decoration-thickness: 5px; /* Define a espessura da linha inferior para 2 pixels */
        }
       
.botao-menu {
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        /* Estilo para o menu (inicialmente oculto) */
        .menu {
            display: none;
            position: absolute;
            background-color: #f1f1f100;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            
           
        }

        /* Estilo para os itens de menu */
        .menu a {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            color: #000000;
        }

        /* Altera o estilo do item de menu quando o mouse está sobre ele */
        .menu a:hover {
            background-color: #dcb7e0;
        }

        /* Exibe o menu quando o botão é clicado */
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
    /* Estilo para o contêiner dos botões */
.banner-buttons {
    text-align: center; /* Centraliza os botões horizontalmente */
    margin-top: 20px; /* Adiciona um espaço entre a imagem e os botões */
   
}

/* Estilo para os botões */
.botao-banner {
    margin-right: 80px;
    background-color: #00000000;
    border: 1px dashed #411005; /* Borda pontilhada */
    padding: 12px 20px; /* Aumentar o padding para tornar o botão maior */
    border-radius: 50px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s; /* Transições suaves */
    text-decoration: none; /* Remover sublinhado */
    color: #ffffff; /* Cor padrão do texto */
    font-size: 24px; /* Tamanho da fonte */
    font-family: Arial, sans-serif; /* Estilo da fonte */
}

/* Efeito de hover para os botões */
.botao-banner:hover {
    background-color: #411005; /* Nova cor ao passar o cursor */
    color: #e3aeaa; /* Cor do texto ao passar o cursor */

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



.column [data-toggle="tooltip"]:hover:after {
        content: attr(title);
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        padding: 5px;
        background-color: #333;
        color: #fff;
        border-radius: 3px;
        z-index: 1;
        white-space: nowrap;
        display: none;
    }

    .column [data-toggle="tooltip"]:hover:after {
        display: block;
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
            
        
        <div class="botao-direita">
             <i class="bi bi-whatsapp" >TIRE SUAS DÚVIDAS</i>
        </div>
            
        </div>
    </div>
    <div class="container">
        
        <img src="fotos/BANER.png" class="banner-image">
        <div class="banner-text">
            <h1>BOLOS</h1>
            <p>Deliciosamente recheados e com muito sabor, cada um de nossos bolos é criado
                para proporcionar mais amor e carinho para todas as ocasiões.</p>
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
            <div class="column" data-toggle="tooltip" title="Sua Descrição Aqui">
                <div class='produtos'>
                #1
</div>
                <div class="bolos">
                <img src="fotos/bolo1.png" alt="Foto 1">
            </div>
                <div class="description">Limão Siciliano</div>
                
                <div class="button-container">
                    <div class="preco" button>R$30,00/kg</button>
                    </div>
                    
                </div>
            </div>
            <div class="column">
            <div class='produtos'>
                #2
</div>
                <div class="bolos">
                <img src="fotos/bolo2.png" alt="Foto 2">
            </div>
                <div class="description">Banoffe</div>
                <div class="button-container">
                    <div class="preco" button>R$38,00/kg</button>
                    </div>
                </div>
            </div>
            <div class="column">
            <div class='produtos'>
                #3
</div>
                <div class="bolos">
                <img src="fotos/bolo3.png" alt="Foto 3">
            </div>
                <div class="description">Frutas Amarelas</div>
                <div class="button-container">
                    <div class="preco" button>R$28,00/kg</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
            <div class='produtos'>
                #4
</div>
                <div class="bolos">
                <img src="fotos/bolo4.png" alt="Foto 4">
            </div>
                <div class="description">Trufado de Chocolate Zero Açúcar</div>
                <div class="button-container">
                    <div class="preco" button>R$45,00/kg</button>
                    </div>
                </div>
            </div>
            <div class="column">
            <div class='produtos'>
                #5
</div>
                <div class="bolos">
                <img src="fotos/bolo5.png" alt="Foto 5">
            </div>
                <div class="description">Trufado de Chocolate com Morango Zero Açúcar</div>
                <div class="button-container">
                    <div class="preco" button>R$48,00/kg</button>
                    </div>
                </div>
            </div>
            <div class="column">
            <div class='produtos'>
                #6
</div>
                <div class="bolos">
                <img src="fotos/bolo6.png" alt="Foto 6">
            </div>
                <div class="description">Trufado de Chocolate</div>
                <div class="button-container">
                    <div class="preco" button>R$40,00/kg</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
            <div class='produtos'>
                #26
</div>
                <div class="bolos">
                <img src="fotos/bolo7.png" alt="Foto 4">
            </div>
                <div class="description">Bolo Massa Folhada com baba de moça e doce de leite</div>
                <div class="button-container">
                    <div class="preco" button>R$55,00/kg</button>
                    </div>
                </div>
            </div>
            <div class="column">
            <div class='produtos'>
                #27
</div>
                <div class="bolos">
                <img src="fotos/bolo8.png" alt="Foto 5">
            </div>
                <div class="description">Red velvet 'perfil brasileiro'</div>
                <div class="button-container">
                    <div class="preco" button>R$42,00/kg</button>
                    </div>
                </div>
            </div>
            <div class="column">
            <div class='produtos'>
                #28
</div>
                <div class="bolos">
                <img src="fotos/bolo9.png" alt="Foto 6">
            </div>
                <div class="description">Red velvet 'perfil americano'</div>
                <div class="button-container">
                    <div class="preco" button>R$45,00/kg</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column"> <div class='produtos'>
                #29
</div>
                <div class="bolos">
                <img src="fotos/bolo10.png" alt="Foto 4">
            </div>
                <div class="description">Bolo Moça de churros</div>
                <div class="button-container">
                    <div class="preco" button>R$35,00/kg</button>
                    </div>
                </div>
            </div>
            <div class="column">
            <div class='produtos'>
                #30
</div>
                <div class="bolos">
                <img src="fotos/bolo11.png" alt="Foto 5">
            </div>
                <div class="description">Bolo da Maria</div>
                <div class="button-container">
                    <div class="preco" button>R$50,00/kg</button>
                    </div>
                </div>
            </div>
            <div class="column">
            <div class='produtos'>
                #31
</div>
                <div class="bolos">
                <img src="fotos/bolo12.png" alt="Foto 6">
            </div>
                <div class="description">Brigadeirinho
                </div>
                <div class="button-container">
                    <div class="preco" button>R$32,00/kg</button>
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



