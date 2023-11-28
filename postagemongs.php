


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
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
        }

        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
        }


        #post-container {
            display: flex;
            justify-content: center;
        }

        .post {
            margin: 10px;
            padding: 10px;
            border: 0px solid #000;
            display: flex;
        }

        .post-image {
            max-width: 300px;
            height: auto;
            margin-right: 10px;
        
        }

        .post-text {
           

            flex: 1;
           BORDER-RADIUS:20PX;
        }

        .post-link {
            display: block;
        }

        .post-button {
            /* Estilos para o botão 'Postar' */
  background-color: #3498db; /* Cor de fundo do botão */
  color: #fff; /* Cor do texto */
  padding: 10px 20px; /* Ajuste o tamanho do botão conforme necessário */
  border: none; /* Remover a borda */
  border-radius: 50px; /* Cantos arredondados */
  font-weight: bold; /* Texto em negrito */
        }

        .edit-button {
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .delete-button {
            background-color: #ff0000;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }


        .post-color{
            border:0;
        }
        .posts {
            display: flex;
            background-color: rgba(0, 0, 0, 0.7); 
            justify-content: center;
            align-items: center;
            margin-left: 440px;
            width: 500px;
            border-radius: 20px;
           
           

        
        }
        .mergem{
            margin: 200px;
        }
        #view-list {
  display: inline-block;
  padding: 10px 20px; /* Ajuste o tamanho do botão conforme necessário */
  background:#735167;
  color: #fff; /* Cor do texto */
  text-decoration: none; /* Remover sublinhado padrão de links */
  border: 1px solid #57404f; /* Borda do botão */
  border-radius: 5px; /* Cantos arredondados */
  font-weight: bold; /* Texto em negrito */
}

/* Estilizar o botão quando o mouse passar por cima */
#view-list:hover {
  background-color: #57404f; /* Cor de fundo alterada */
}
.pedidos{
    color: white;
}
.fonte{
    color: white;
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
    <br><br>

    <div class="posts">
        <div class="margem">
    <div id="post-form">
        <div class='fonte'>
    <div class= 'pedidos'>
        <h2>ONGS<h2>
    </div>
        <label for="post-text">TEXTO</label>
        <textarea id="post-text" rows="4" cols="50"></textarea><br>
        <label for="post-link">LINK</label>
        <input type="text" id="post-link"><br>
        <label for="post-color">COR DA FONTE</label>
        <input type="color" id="post-color"><br>
        <label for="post-bg-color">COR DE FUNDO</label>
        <input type="color" id="post-bg-color"><br>
        <label for="post-btn-color">COR DO 'Saiba Mais'</label>
        <input type="color" id="post-btn-color"><br>
        <label for="post-image">IMAGEM</label>
        <input type="file" id="post-image"><br>
        <br><br>
        <button id="post-button">Postar</button>
        <br> <br> 
    </div>
    </div>
    </div>
    </div>
    <div id="post-container">
        <div id="posts"></div>
    </div>

    <script>
        let postsArray = JSON.parse(localStorage.getItem("postsArray")) || [];
        let editIndex = null;

        const postForm = document.getElementById("post-form");
        const postButton = document.getElementById("post-button");
        const postsContainer = document.getElementById("posts");

        function savePostsToLocalStorage() {
            localStorage.setItem("postsArray", JSON.stringify(postsArray));
        }

        function displayPosts() {
            postsContainer.innerHTML = "";

            postsArray.forEach((postData, index) => {
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

                const editButton = document.createElement("button");
                editButton.textContent = "Editar";
                editButton.className = "edit-button";
                editButton.addEventListener("click", () => editPost(index));

                const deleteButton = document.createElement("button");
                deleteButton.textContent = "Excluir";
                deleteButton.className = "delete-button";
                deleteButton.addEventListener("click", () => deletePost(index));

                post.appendChild(img);
                post.appendChild(postTextElem);
                post.appendChild(postLinkElem);
                post.appendChild(editButton);
                post.appendChild(deleteButton);

                postsContainer.appendChild(post);
            });
        }

        function editPost(index) {
            editIndex = index;
            const postData = postsArray[index];

            document.getElementById("post-text").value = postData.text;
            document.getElementById("post-link").value = postData.link;
            document.getElementById("post-color").value = postData.color;
            document.getElementById("post-bg-color").value = postData.bgColor;
            document.getElementById("post-btn-color").value = postData.btnColor;
            document.getElementById("post-image").value = postData.img;

           
            if (postData.img) {
                const imgPreview = document.getElementById("image-preview");
                imgPreview.src = postData.img;
            }

            
            postButton.textContent = "Salvar";
        }

        function deletePost(index) {
            postsArray.splice(index, 1);
            savePostsToLocalStorage();
            displayPosts();
        }

        postButton.addEventListener("click", function () {
            if (editIndex !== null) {
               
                postsArray[editIndex] = getPostDataFromForm();
                editIndex = null;
                postButton.textContent = "Postar"; 
            } else {
               
                postsArray.push(getPostDataFromForm());
            }

            savePostsToLocalStorage();
            displayPosts();

           
            clearForm();
        });

        function getPostDataFromForm() {
            const postText = document.getElementById("post-text").value;
            const postLink = document.getElementById("post-link").value;
            const postColor = document.getElementById("post-color").value;
            const postBgColor = document.getElementById("post-bg-color").value;
            const postBtnColor = document.getElementById("post-btn-color").value;
            const postImage = document.getElementById("post-image").files[0];

            return {
                text: postText,
                link: postLink,
                color: postColor,
                bgColor: postBgColor,
                btnColor: postBtnColor,
                img: postImage ? URL.createObjectURL(postImage) : null
            };
        }

        function clearForm() {
            document.getElementById("post-text").value = "";
            document.getElementById("post-link").value = "";
            document.getElementById("post-color").value = "#000";
            document.getElementById("post-bg-color").value = "#FFF";
            document.getElementById("post-btn-color").value = "#000";
            document.getElementById("post-image").value = null;

        
            const imgPreview = document.getElementById("image-preview");
            imgPreview.src = "";
        }

        displayPosts();
    </script>
    <br>
    <a href="ongs.php" id="view-list">Ver Postagens</a>








   
    </div>
</body>

</html>