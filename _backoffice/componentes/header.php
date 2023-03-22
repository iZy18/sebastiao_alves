<!-- 

    Autor: Ricardo Frasco

 -->




<?php 

if(!verificarLogado()){
    header("Location: " . $url_base . "backoffice/");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho Final - Ricardo Frasco</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <!-- CSS LOCAL -->
    <link rel="stylesheet" href="<?= $url_base; ?>public/css/backoffice.css">

    <!-- EDITOR TEXTO -->
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script src="<?= $url_base; ?>public/js/funcoes.js"></script>
    <link href="https://unpkg.com/css.gg@2.0.0/icons/css/log-off.css" rel="stylesheet">

</head>
<body class="bg-secondary">
    <header class="container-fluid mb-5">
        <div class="row mx-auto">
            <div class="col-12 mx-auto border border-3 border-light rounded p-4 my-3 text-center">
                <nav class="links_backoffice d-flex flex-wrap justify-content-center gap-3 w-100">
                    <a href="<?= $url_base; ?>backoffice/inicio">INICIO</a>
                    <a href="<?= $url_base; ?>backoffice/carrousel">CARROUSEL</a>
                    <a href="<?= $url_base; ?>backoffice/home">HOME</a>
                    <a href="<?= $url_base; ?>backoffice/destaques">DESTAQUES</a>
                    <a href="<?= $url_base; ?>backoffice/autor">AUTOR</a>
                    <a href="<?= $url_base; ?>backoffice/livros">LIVROS</a>
                    <a href="<?= $url_base; ?>backoffice/imprensa">IMPRENSA</a>
                    <a href="<?= $url_base; ?>backoffice/contactos">CONTACTOS</a>
                    <a href="<?= $url_base; ?>backoffice/redes">REDES</a>
                    <a href="<?= $url_base; ?>backoffice/configuracoes">CONFIGURAÇÕES</a>
                    <a onclick="logOff()"><i class="gg-log-off mx-auto"></i>LOGOFF</a>
                </nav>
            </div>
        </div>
    </header>
    
</body>
</html>