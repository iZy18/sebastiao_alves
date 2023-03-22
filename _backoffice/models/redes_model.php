<?php

$form= isset($_POST["instagram"]) && isset($_POST["facebook"]) && isset($_POST["linkedin"]);

if($form){
    $face = $_POST["facebook"];
    $insta= $_POST["instagram"];
    $linkedin = $_POST["linkedin"];

    iduSQL("UPDATE redessociais SET instagram='$insta', facebook='$face', linkedin='$linkedin'");
}

$redes = selectSQLUnico("SELECT * FROM redessociais");;


require_once("_backoffice/componentes/header.php");
require_once("_backoffice/views/redes_view.php");
require_once("_backoffice/componentes/footer.php");

?>