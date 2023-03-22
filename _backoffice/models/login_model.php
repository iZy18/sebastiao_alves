<?php

$form = isset($_POST["login"]) && isset($_POST["senha"]);

if($form){
    $user = $_POST["login"];
    $senha = $_POST["senha"];
    if(fazerLogin($user, $senha)){
        header("Location: " . $url_base . "backoffice/inicio");
        exit();
    }
}

require_once("_backoffice/componentes/header_login.php");
require_once("_backoffice/views/login_view.php");
require_once("_backoffice/componentes/footer.php");

?>