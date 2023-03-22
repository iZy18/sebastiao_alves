<main>
  <div class="row caixa-branca-geral autor">
    <div class="col-12 autor-titulo ms-4">
      <div class="row">
        <div class="col menu selected">Contactos</div>
      </div>
      <div class="row">
        <div class="col-12 t1">
          Pode contactar-me através do e-mail ou telefone
        </div>
      </div>
    </div>
  </div>
  <div class="row contactos">
    <div class="col-12 text-center">
      <div class="row contactos-info d-flex flex-column flex-md-row justify-content-center align-items-center gap-5 gap-md-0 d-block">
        <div class="col-2 d-none d-md-block"></div>

        <div class="col-12 col-md-2">
          <div class="row">
            <div class="col-12 contato-titulo text-center">Telefone</div>
          </div>
          <div class="row">
            <div class="col-12 contato-conteudo"><?= $contactos["telefone"] ?></div>
          </div>
        </div>

        <div class="col-12 col-md-4">
          <div class="row">
            <div class="col-12 contato-titulo text-center">Morada</div>
          </div>
          <div class="row">
            <div class="col-12 contato-conteudo">
                <?= $contactos['morada'] ?> 
            </div>
          </div>
        </div>

        <div class="col-12 col-md-2">
          <div class="row">
            <div class="col-12 contato-titulo text-center">Email</div>
          </div>
          <div class="row">
            <div class="col-12 contato-conteudo"><?= $contactos["email"] ?></div>
          </div>
        </div>
        <div class="col-2"></div>
      </div>
    </div>


    <div class="row d-none d-md-block mx-0">
      <div class="col-6 linha-contatos px-0"></div>
    </div>

    <div class="row mx-0">
      <div class="col-12">
        <div class="row">
          <div class="col-12 contato-titulo text-center">Horário</div>
        </div>
        <div class="row">
          <div class="col-12 contato-conteudo text-center">
            <?= $contactos["horario"] ?>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</main>
   