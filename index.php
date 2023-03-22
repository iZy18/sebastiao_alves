<?php
require_once("requisitos.php");
$url_base = "http://localhost/sebastiao_alves/";

$url_completa = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

$rota = str_replace($url_base, '', $url_completa);
$rota = explode("/", $rota);


switch($rota[0]){
    case "": require_once("frontoffice/models/home_model.php"); break;
    case "imprensa": require_once("frontoffice/models/imprensa_model.php"); break;
    case "livros": 
        require_once("frontoffice/models/livros_model.php");
        break;
    case "autor": require_once("frontoffice/models/autor_model.php"); break;
    case "contactos": require_once("frontoffice/models/contactos_model.php"); break;


    case "backoffice":  
        switch(isset($rota[1]) ? $rota[1] : ""){
            case "": require_once("_backoffice/models/login_model.php"); break;
            case "inicio": require_once("_backoffice/models/inicio_model.php"); break;
            case "home": require_once("_backoffice/models/home_model.php"); break;
            case "destaques": require_once("_backoffice/models/destaques_model.php"); break;
            case "carrousel": require_once("_backoffice/models/carrousel_model.php"); break;
            case "autor": require_once("_backoffice/models/autor_model.php"); break;
            case "contactos": require_once("_backoffice/models/contactos_model.php"); break;
            case "imprensa": require_once("_backoffice/models/imprensa_model.php"); break;
            case "livros": require_once("_backoffice/models/livros_model.php"); break;
            case "logoff": require_once("_backoffice/models/logoff_model.php"); break;
            case "redes": require_once("_backoffice/models/redes_model.php"); break;
            case "configuracoes": require_once("_backoffice/models/configuracoes_model.php"); break;


            default: echo "404"; break;
        }
        break;


    default: echo(404);
   
    break;
}
?>