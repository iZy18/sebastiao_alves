<?php

$home = selectSQLUnico("SELECT * FROM home WHERE id=1");
$texto_autor = implode(' ', selectSQLUnico("SELECT texto FROM autor"));
$destaques = [];

if($home["destaque_1"] != 0){
    $destaques[] = getLivroID($home["destaque_1"]);
}
if($home["destaque_2"] != 0){
    $destaques[] = getLivroID($home["destaque_2"]);
}
if($home["destaque_3"] != 0){
    $destaques[] = getLivroID($home["destaque_3"]);
}

require_once("frontoffice/componentes/header/header.php");
require_once("frontoffice/views/home_view.php");
require_once("frontoffice/componentes/footers/footergeral.php");


?>