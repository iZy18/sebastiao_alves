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
            $data = $_POST["data"];
            iduSQL("INSERT INTO imprensa (titulo, data, texto, imagem) VALUES ('$titulo', '$data', '$descricao', '$imagem')");
            break;
        case "apagar":
            $id=$_POST["id"];
            iduSQL("DELETE FROM imprensa WHERE id=$id");
            break;
        case "editar":
            $id=$_POST["id"];
            $livro_editar = selectSQLUnico("SELECT * FROM imprensa WHERE id=$id");
            break;   
        case "editar_fim":
            $id=$_POST["id"];
            $titulo = $_POST["titulo"];
            $descricao = $_POST["descricao"];
            $imagem = $_POST["imagem"];
            $data = $_POST["data"];
            iduSQL("UPDATE imprensa SET titulo ='$titulo', texto='$descricao', data='$data', imagem='$imagem' WHERE id=$id");
            break;     
    }
}

$imprensa = selectSQL("SELECT * FROM imprensa");

require_once("_backoffice/componentes/header.php");
require_once("_backoffice/views/imprensa_view.php");
require_once("_backoffice/componentes/footer.php");

?>