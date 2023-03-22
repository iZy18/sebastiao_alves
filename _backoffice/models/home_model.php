<?php




$form = isset($_POST["ultimos_livros"]) && isset($_POST["foto_autor"]);

if($form){
    $ultimos = $_POST["ultimos_livros"];
    $img = $_POST["foto_autor"];
    print_r($ultimos);

    iduSQL("UPDATE home SET ultimos_livros='$ultimos', foto_autor='$img'"); 
    

}

$home = selectSQLUnico("SELECT * FROM home");
require_once("_backoffice/componentes/header.php");
require_once("_backoffice/views/home_view.php");
require_once("_backoffice/componentes/footer.php");

?>