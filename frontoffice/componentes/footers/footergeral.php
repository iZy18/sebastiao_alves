<footer>
       <div class="row mt-5 d-none d-md-block">
         <div class="col linha-2 mt-5 mb-2 mx-5 w-auto"></div>
         <nav class="col-12 navbar navbar-expand-md">
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNavDropdown"
              aria-controls="navbarNavDropdown"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-center"
              id="navbarNavDropdown"
            >
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link menu <?=($rota[0] == "")? 'selected': ''?>" aria-current="page" href="<?=$url_base;?>"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link menu <?=($rota[0] == "autor")? 'selected': ''?>" aria-current="page" href="<?=$url_base . 'autor';?>"
                    >Autor</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link menu <?=($rota[0] == "livros")? 'selected': ''?>"
                    href="#menu-dropdown"
                    role="button"
                    onclick="abrir()"
                  >
                    Livros
                  </a>
                  
                </li>
                <li class="nav-item">
                  <a class="nav-link menu <?=($rota[0] == "imprensa")? 'selected': ''?>" aria-current="page" href="<?=$url_base . 'imprensa/1';?>"
                    >Imprensa</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link menu <?=($rota[0] == "contactos")? 'selected': ''?>" aria-current="page" href="<?=$url_base . 'contactos';?>"
                    >Contactos</a
                  >
                </li>
              </ul>
            </div>
          </nav>
         <div class="col linha-2 mt-2 mx-5 w-auto"></div>
         <div class="row c-rs">
           <div class="col-6">
             <div class="row">
               <div class="col-12 t1">Contactos</div>
               <div class="row mt-3">
                 <div class="col-5 contato-titulo">Morada</div>
                 <div class="col-3 ms-2 contato-titulo">Telefone</div>
                 <div class="col-3 ms-2 contato-titulo">Email</div>
               </div>
               <div class="row mt-1">
                 <div class="col-5 contato-conteudo">
                  <?= $contactos["morada"] ?>
                 </div>
                 <div class="col-3 ms-2 contato-conteudo"><?= $contactos["telefone"] ?></div>
                 <div class="col-3 ms-2 contato-conteudo"><?= $contactos["email"] ?></div>
               </div>
             </div>
           </div>
 
           <div class="col-4 siga">
             <div class="row">
               <div class="col-12 t1">Siga-me nas redes sociais</div>
               <div class="col-12 d-flex justify-content-center gap-5 mt-3 redes-sociais">
                  <a class="insta" href="<?=$redes['instagram']?>" target="_blank">
                      <img src="http://localhost/sebastiao_alves/public/imagens/desktop/instagram1.svg" class="img-rs img-i1" alt="">
                      <img src="http://localhost/sebastiao_alves/public/imagens/desktop/instagram2.svg" class="img-rs img-i2" alt="">
                  </a>
                  <a class="face" href="<?=$redes['facebook']?>" target="_blank">
                      <img src="http://localhost/sebastiao_alves/public/imagens/desktop/facebook1.svg" class="img-rs img-f1"alt="">
                      <img src="http://localhost/sebastiao_alves/public/imagens/desktop/facebook2.svg" class="img-rs img-f2"alt="">
                  </a>
                  <a class="lin" href="<?=$redes['linkedin']?>" target="_blank">
                      <img src="http://localhost/sebastiao_alves/public/imagens/desktop/linkedin1.svg" class="img-rs img-l1"alt="">
                      <img src="http://localhost/sebastiao_alves/public/imagens/desktop/linkedin2.svg" class="img-rs img-l2"alt="">
                  </a>
               </div>
             </div>
             <div class="row"></div>
           </div>
         </div>
         <div class="row">
           <div class="col-6 info-legal">
             <img
               src="http://localhost/sebastiao_alves/public/imagens/desktop/livroreclamacoes.svg"
               class="livroreclamacoes"
               alt=""
             />
             <img src="http://localhost/sebastiao_alves/public/imagens/desktop/ralc.svg" class="ralc" alt="" />
           </div>
           <div class="col-4 cookies">
             <div class="row text-center">
               <div class="col-12 p">Politica de Cookies.</div>
               <div class="col-12 p">
                 Copyright © Grupo MediaMaster. Todos os direitos reservados.
               </div>
             </div>
           </div>
         </div>
       </div>

       <div class="row footer-mobile d-md-none mt-5">
       
          <div class="col-12 mt-3">
            <div class="row linha-mobile"></div>
            <div class="col-12 t1 text-center mt-5">Contactos</div>
            <div class="col-12 contato-titulo text-center mt-3">Morada</div>
            <div class="col-8 contato-conteudo text-center mx-auto">
              <?= $contactos["morada"] ?>
            </div>
            <div class="col-12 contato-titulo text-center mt-3">Telefone</div>
            <div class="col-8 contato-conteudo text-center mx-auto">
             <?= $contactos["telefone"] ?>
            </div>
            <div class="col-12 contato-titulo text-center mt-3">Email</div>
            <div class="col-8 contato-conteudo text-center mx-auto">
             <?= $contactos["morada"] ?>
            </div>
          </div>

          <div class="col-12 mt-5">
            <div class="col-12 t1 text-center">Siga-me nas redes sociais</div>
            <div class="col-12 d-flex justify-content-center mt-3 redes-sociais">
              <a class="insta" href="<?=$redes['instagram']?>" target="_blank">
                  <img src="http://localhost/sebastiao_alves/public/imagens/desktop/instagram1.svg" class="img-rs img-i1" alt="">
                  <img src="http://localhost/sebastiao_alves/public/imagens/desktop/instagram2.svg" class="img-rs img-i2" alt="">
              </a>
              <a class="face" href="<?=$redes['facebook']?>" target="_blank">
                  <img src="http://localhost/sebastiao_alves/public/imagens/desktop/facebook1.svg" class="img-rs img-f1"alt="">
                  <img src="http://localhost/sebastiao_alves/public/imagens/desktop/facebook2.svg" class="img-rs img-f2"alt="">
              </a>
              <a class="lin" href="<?=$redes['linkedin']?>" target="_blank">
                  <img src="http://localhost/sebastiao_alves/public/imagens/desktop/linkedin1.svg" class="img-rs img-l1"alt="">
                  <img src="http://localhost/sebastiao_alves/public/imagens/desktop/linkedin2.svg" class="img-rs img-l2"alt="">
              </a>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-12 info-legal d-flex justify-content-center gap-5 mt-5">
              <img
                src="http://localhost/sebastiao_alves/public/imagens/desktop/livroreclamacoes.svg"
                class="livroreclamacoes ms-5"
                alt=""
              />
              <img src="http://localhost/sebastiao_alves/public/imagens/desktop/ralc.svg" class="ralc mx-0 ms-1" alt="" />
            </div>
            <div class="col-12 cookies mt-5">
              <div class="row text-center">
                <div class="col-12 p">Politica de Cookies.</div>
                <div class="col-12 p">
                  Copyright © Grupo MediaMaster. Todos os direitos reservados.
                </div>
              </div>
            </div>
          </div>


       
       </div>


     </footer>   




<!--JS bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>