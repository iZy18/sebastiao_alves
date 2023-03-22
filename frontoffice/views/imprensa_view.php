<main class="row px-0">
    
    <div class="caixa-branca-geral autor">
    <div class="col-12 autor-titulo ms-4">
        <div class="row">
        <div class="col menu selected">Imprensa</div>
        </div>
        <div class="row">
        <div class="col-12 t1">Últimas notícias</div>
        </div>
    </div>
    </div>

    <?php foreach($pagina_atual as $p): ?>
    <div class="row imprensa-caixa">
    <div class="col-12">
        <div class="row">
        <div class="col-12 t1 px-0">
            <?=$p["titulo"]?>
        </div>
        </div>
        <div class="row">
        <div class="col-12 imprensa-linha"></div>
        </div>
        <div class="row">
        <div class="col-12 imprensa-pub imprensa-data px-0">
            Publicado a <?=$p["data"]?>
        </div>
        </div>

        <?php if($p["imagem"] != ""): ?>
        <div class="row">
        <div class="col-12 px-0">
            <img
            class="imprensa-img"
            src="<?=$p["imagem"]?>"
            alt=""
            />
        </div>
        </div>
        <?php endif; ?>
        <?php if($p["texto"] != ""): ?>
        <div class="row">
            <div class="col-12 px-0 mb-3">
            <div class="p">
                <?= $p["texto"]?>
            </div>
            </div>
        </div>
        <?php endif; ?>


    </div>
    </div>

    <?php endforeach; ?>
    

    <div class="row imprensa-paginacao">
    <div class="col-12 d-flex justify-content-center">
    <a href="<?=($pagina == '1')? '#' : intval($pagina)-1 ?>"><div class="voltar-pagina"></div></a>
        <div class="d-flex gap-4">
            <?php for($i = 1; $i <= $numero_paginas; $i++): ?>
                <a class="paginacao <?=($pagina == $i)? "pag-ativa": ""?>" href="<?=$i?>"><?=$i?></a>
            <?php endfor; ?>
        </div>
        <a href="<?=($pagina == $numero_paginas)? '#' :  intval($pagina)+1 ?>"><div class="avancar-pagina"></div></a>
    </div>
    </div>
</main>