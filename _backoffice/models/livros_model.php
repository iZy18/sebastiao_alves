<?php

$acao = "";

$form = isset($_POST["acao"]);

if($form){
    $acao= $_POST["acao"];
    switch($acao){
        case "novo":
            $titulo = $_POST["titulo"];
            $descricao = $_POST["descricao"];
            $imagem = $_POST["imagem"];
            iduSQL("INSERT INTO livros (titulo, descricao, link) VALUES ('$titulo','$descricao','$imagem')");
            break;
        case "apagar":
            $id=$_POST["id"];
            iduSQL("DELETE FROM livros WHERE id=$id");
            break;
        case "editar":
            $id=$_POST["id"];
            $livro_editar = selectSQLUnico("SELECT * FROM livros WHERE id=$id");
            break;   
        case "editar_livro":
            $id=$_POST["id"];
            $titulo = $_POST["titulo"];
            $descricao = $_POST["descricao"];
            $imagem = $_POST["imagem"];
            iduSQL("UPDATE livros SET titulo ='$titulo', descricao='$descricao', link='$imagem' WHERE id=$id");
            break;     
    }
}

$livros = selectSQL("SELECT * FROM livros");

require_once("_backoffice/componentes/header.php");
require_once("_backoffice/views/livros_view.php");
require_once("_backoffice/componentes/footer.php");

?>