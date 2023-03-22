<?php
$autor = selectSQLUnico("SELECT * FROM autor");
$form= isset($_POST["img_autor"]) && isset($_POST["texto_autor"]);

if($form){
    $texto = $_POST["texto_autor"];
    $img = $_POST["img_autor"];

    iduSQL("UPDATE autor SET texto='$texto', imagem='$img'"); 
}



require_once("_backoffice/componentes/header.php");
require_once("_backoffice/views/autor_view.php");
require_once("_backoffice/componentes/footer.php");

?>