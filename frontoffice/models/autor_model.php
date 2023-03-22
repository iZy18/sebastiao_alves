<?php
$autor = selectSQLUnico("SELECT * FROM autor WHERE id=1");

require_once("frontoffice/componentes/header/header.php");
require_once("frontoffice/views/autor_view.php");
require_once("frontoffice/componentes/footers/footergeral.php");


?>

<script> fazerScroll(-10);</script>