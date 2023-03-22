<?php


$form = isset($_POST["submit"]);

if(isset($_POST["submit"])){
    $destaque1 = $_POST["destaque1"];
    $destaque2 = $_POST["destaque2"];
    $destaque3 = $_POST["destaque3"];
    
    iduSQL("UPDATE home SET destaque_1 ='$destaque1', destaque_2='$destaque2', destaque_3='$destaque3'"); 

    $destaque1_destaque = $_POST["destaque1_destaque"];
    $destaque2_destaque = $_POST["destaque2_destaque"];
    $destaque3_destaque = $_POST["destaque3_destaque"];

    
    iduSQL("UPDATE livros SET destaque ='$destaque1_destaque' WHERE id = '$destaque1' "); 
    iduSQL("UPDATE livros SET destaque ='$destaque2_destaque' WHERE id = '$destaque2' "); 
    iduSQL("UPDATE livros SET destaque ='$destaque3_destaque' WHERE id = '$destaque3' "); 
}



$destaques = selectSQLUnico("SELECT destaque_1, destaque_2, destaque_3 FROM home");
$livro = selectSQL("SELECT id, titulo, destaque FROM livros");


require_once("_backoffice/componentes/header.php");
require_once("_backoffice/views/destaques_view.php");
require_once("_backoffice/componentes/footer.php");


?>