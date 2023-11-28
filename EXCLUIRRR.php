<?php

    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM usuario_excluido WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {   
           $sqlDelete = "DELETE FROM usuario_excluido WHERE id='$id'";
           $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: usuariosexcluidos.php');
   
?>