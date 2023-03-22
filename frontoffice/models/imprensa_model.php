<?php

$publi = SelectSQL("SELECT * FROM imprensa ORDER BY id DESC");

if(!isset($rota[1])){
    $rota[1] = 1;
};
$pagina = $rota[1];
$elementos_por_pagina = 2;

$numero_paginas = ceil(count($publi) / $elementos_por_pagina);

$pagina_atual = array_slice($publi, ($pagina-1) * $elementos_por_pagina, $elementos_por_pagina);

require_once("frontoffice/componentes/header/header.php");
require_once("frontoffice/views/imprensa_view.php");
require_once("frontoffice/componentes/footers/footergeral.php");


?>

<script> if(window.innerWidth>768) {fazerScroll(-55)}else{fazerScroll(-10)};</script>