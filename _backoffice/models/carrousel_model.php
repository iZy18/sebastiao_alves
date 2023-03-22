<?php
 
$acao = "";


$form = isset($_POST["acao"]);

if($form){
    $acao=$_POST["acao"];
    switch($acao){
        case "novo":
            $titulo = $_POST["titulo"];
            $descricao = $_POST["texto"];
            $imagem_desktop = $_POST["imagem"];
            $imagem_mobile = $_POST["imagem_mobile"];
            $novidade = $_POST["novidade"];
            $link = $_POST["link"];
            iduSQL("INSERT INTO cabecalho (titulo, descricao, imagem, imagem_mobile, novidade, link) VALUES ('$titulo', '$descricao', '$imagem_desktop', '$imagem_mobile', '$novidade', '$link')");
            break;
        case "apagar":
            $id=$_POST["id"];
            iduSQL("DELETE FROM cabecalho WHERE id=$id");
            break;
        case "editar":
            $id=$_POST["id"];
            $c_editar = selectSQLUnico("SELECT * FROM cabecalho WHERE id=$id");
            break;   
        case "editar_fim":
            $id=$_POST["id"];
            $titulo = $_POST["titulo"];
            $descricao = $_POST["texto"];
            $imagem_desktop = $_POST["imagem_desktop"];
            $imagem_mobile = $_POST["imagem_mobile"];
            $novidade = $_POST["novidade"];
            $link = $_POST["link"];
            iduSQL("UPDATE cabecalho SET titulo ='$titulo', descricao='$descricao', imagem='$imagem_desktop', imagem_mobile='$imagem_mobile', novidade='$novidade', link='$link' WHERE id=$id");
            break;     
    }
}

$carrousel = selectSQL("SELECT * FROM cabecalho");

require_once("_backoffice/componentes/header.php");
require_once("_backoffice/views/carrousel_view.php");
require_once("_backoffice/componentes/footer.php");

?>