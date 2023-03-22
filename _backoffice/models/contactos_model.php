<?php

$form= isset($_POST["morada"]) && isset($_POST["telefone"]) && isset($_POST["email"]) && isset($_POST["horario"]);

if($form){
    $morada = $_POST["morada"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $horario = $_POST["horario"];

    iduSQL("UPDATE contactos SET morada='$morada', telefone='$telefone', email='$email', horario='$horario'");
}

$contactos = selectSQLUnico("SELECT * FROM contactos");

require_once("_backoffice/componentes/header.php");
require_once("_backoffice/views/contactos_view.php");
require_once("_backoffice/componentes/footer.php");

?>
