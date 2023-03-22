<main>
    <div class="row caixa-branca-geral autor">
    <div class="col-7 autor-titulo ms-4">
        <div class="row">
        <div class="col menu selected">Autor</div>
        </div>
        <div class="row">
        <div class="col-11 t1">Sobre mim</div>
        </div>
    </div>
    </div>

    <div class="row">
    <div class="col-12 d-flex justify-content-center">
        <img class="autor-img" src="<?= $autor["imagem"] ?>" alt="" />
    </div>
    </div>

    <div class="row">
    <div id="texto" class="col-12 mx-auto autor-txt p d-none d-md-block">
        <?= $autor["texto"] ?>
    </div>
    
    <div id="texto-pequeno" class="col-12 mx-auto autor-txt d-block p d-md-none ">
        <?= substr($autor["texto"], 0, 300) . "..."  ?>
    </div>
    <div class="autor-botoes">
        <div id="ver-mais-botao" class="col p-0 d-md-none">
            <button  class="ver-mais" onclick="verMais()"></button>
        </div>
        <div class="col col-md-12 p-0">
            <button class="voltar-atras autor-voltar" onclick="voltarAtras()"></button>
        </div>
    </div>
    </div>
</main>