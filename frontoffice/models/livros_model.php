<?php
if(!isset($rota[1])){
    $rota[1] = 1;
};
$livroID = $rota[1];

$livro = selectSQLUnico("SELECT * FROM livros WHERE id = $livroID");

require_once("frontoffice/componentes/header/header.php");
require_once("frontoffice/views/livros_view.php");
require_once("frontoffice/componentes/footers/footergeral.php");


?>

<script> fazerScroll(-10);</script>