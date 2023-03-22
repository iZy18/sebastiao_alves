<main class="container-fluid px-0">
    <div class="row caixa-branca d-flex flex-nowrap">
            
            <img class="col-4 img-autor p-0" src="<?=$home['foto_autor']?>" alt="" />
        
            <div class="col-12 bem-vindo ms-4">
                
                <div class="row">
                    <div class="col-12 t1 bv-titulo">Bem vindo ao meu website</div>
                </div>
                
                
                <div class="row">
                    <div class="col-8 p bv-descricao">
                        <?=substr($texto_autor, 0, 670) . '...'?>
                    </div>
                <div class="col-8 bv-sm-mobile mb-5 mb-md-3">
                    <a href="<?= $url_base . 'autor'; ?>">
                    <button class="saber-mais bv-sm"></button>
                    </a>
                    </div>
                </div>
                
                
                
                
                
                
            </div>
            </div>
            <div class="row destaques mt-5">
            <div class="col-12 p-0 t1">Últimos livros</div>
            <div class="col-12 mt-3 p p-0">
                <?=$home["ultimos_livros"]?>
            </div>
        </div>
            <div class="row destaques-cards mt-5 d-flex justify-content-center">
                <?php $i = 1; ?>
                <?php foreach($destaques as $d): ?>
                    <div class="col-4 destaque-card p-0">
                        <div class="row p-0">
                            <div class="col-12">
                                    <img
                                        class="img-dest"
                                        src="<?= $d['link'] ?>"
                                        alt=""
                                    />
                                    </div>
                                </div>
                                <div class="col p-0 destaque-home mt-3 mx-4">
                                    <?= $d['titulo'] ?>
                                </div>
                                <div class="col novidade mx-4 mt-2"><?= $d['destaque']; ?></div>
                                <div class="col p mx-4 mt-2">
                                    <?= strip_tags( substr($d['descricao'], 0, 200) . '...')?>
                                </div>
                                <div class="col">
                                    <a href="<?= $url_base . 'livros/' . $home['destaque_' . $i]; ?>">
                                    <button class="saber-mais dest-sm me-4 mt-2"></button>
                                    </a>
                                </div>
                            </div>
                            <?php $i++; ?>
                <?php endforeach;?>
    
            </div>
        </main>