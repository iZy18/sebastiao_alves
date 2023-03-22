<?php

$form= isset($_POST["senha"]) && isset($_POST["nova_senha"]) && isset($_POST["nova_senha_rep"]);

$valido = true;
if($form){
    
    $senha = $_POST["senha"];
    $nova_senha = $_POST["nova_senha"];
    $rep = $_POST["nova_senha_rep"];
    $id = $_SESSION["user"]["id"];

    $config = selectSQLUnico("SELECT * FROM users WHERE id='$id'");

    if($senha == $config["password"] && $nova_senha == $rep){
        
        iduSQL("UPDATE users SET password='$nova_senha' WHERE id=$id");
    }
    else{
        $valido = false;
    }
}

require_once("_backoffice/componentes/header.php");
require_once("_backoffice/views/configuracoes_view.php");
require_once("_backoffice/componentes/footer.php");

?>