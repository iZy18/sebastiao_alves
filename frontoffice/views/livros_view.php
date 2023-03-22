<main class="px-0">
      <div class="row caixa-branca-geral autor">
        <div class="col-12 autor-titulo ms-4">
          <div class="row">
            <div class="col menu selected">Livros</div>
          </div>
          <div class="row">
            <div class="col-12 t1">             
               <?= $livro["titulo"]; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="row livro">
        <div class="col-md-6 text-center">
          <img class="livro-img" src="<?=$livro["link"]?>" alt="" />
        </div>
        <div class="col-md-6 livro-txt p">
            <?= $livro["descricao"] ?>

            
        </div>
        <button class="voltar-atras livro-voltar" onclick="voltarAtras()"></button>
      </div>
    </main>