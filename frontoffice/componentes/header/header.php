<!-- 

    Autor: Ricardo Frasco

 -->


<?php
require_once("base_dados/base_dados.php");
$imagens = selectSQL("SELECT * FROM cabecalho");
$livros = selectSQL("SELECT * FROM livros");
$redes = selectSQLUnico("SELECT * FROM redessociais WHERE id = 1");
$contactos = selectSQLUnico("SELECT * FROM contactos WHERE id = 1");
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <title>Sebastião Alves</title>

        <!--CSS Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="<?=$url_base?>public/css/root.css" />
        <link rel="stylesheet" href="<?=$url_base?>public/css/fonts.css" />
        <link rel="stylesheet" href="<?=$url_base?>public/css/header.css" />
        <link rel="stylesheet" href="<?=$url_base?>public/css/main.css" />
        <link rel="stylesheet" href="<?=$url_base?>public/css/footer.css" />
        <link rel="stylesheet" href="<?=$url_base?>public/css/font_style.css">
        <link rel="stylesheet" href="<?=$url_base?>public/css/media_queries.css">

        <script src="<?=$url_base?>public/js/funcoes.js"></script>
    </head>

    <body class="container-fluid px-0">
    <header>
       <div class="header-desktop">
         <div class="row">
         <div class="col-12 cima d-flex justify-content-around flex-column">
          <div class="row titulo mt-5 d-flex justify-content-center">Sebastião Alves</div>
          <div class="row linha w-auto"></div>
          <nav class="row navbar navbar-expand-md">
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
                <ul class="navbar-nav d-flex gap-3">
                  <li class="nav-item">
                    <a class="nav-link menu <?=($rota[0] == "")? 'selected': ''?>" aria-current="page" href="<?=$url_base;?>">home</a>

                  </li>
                  <li class="nav-item">
                    <a class="nav-link menu ms-3 <?=($rota[0] == "autor")? 'selected': ''?>" aria-current="page" href="<?=$url_base . 'autor';?>">autor</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a id="menu-dropdown" class="nav-link dropdown-toggle menu <?=($rota[0] == "livros")? 'selected': ''?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       livros
                    </a>
                    <ul class="dropdown-menu">
                        <?php for($i = 0; $i < count($livros); $i++): ?>
                            <li>
                                <a class="dropdown-item submenu" href="<?=$url_base . 'livros/' . $livros[$i]["id"]?>"> 
                                    <?=$livros[$i]["titulo"]?>
                                </a>
                            </li>
                        <?php endfor ?>
                    </ul>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link menu <?=($rota[0] == "imprensa")? 'selected': ''?>" aria-current="page" href="<?=$url_base . 'imprensa/1';?>">imprensa</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link menu <?=($rota[0] == "contactos")? 'selected': ''?>" aria-current="page" href="<?=$url_base . 'contactos';?>">contactos</a>

                  </li>
               </ul>
           </div>
         </nav>
         </div>
      </div>
 
      <div id="cabecalho" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <?php for($i = 0; $i < count($imagens); $i++): ?>
                <li data-bs-target="#cabecalho" data-bs-slide-to="<?=$i?>" <?=($i == 0)? 'class="active" aria-current="true"' : ''?> aria-label="Slide <?=$i+1?>"></li>
            <?php endfor; ?>
        </ol>
        <div class="carousel-inner">
            <?php $j = 0; ?>
            <?php foreach($imagens as $i): ?>
                
                <div class="carousel-item <?=($j == 0)?'active' : ''?>">
                <img src="<?=$i['imagem']?>" class="cabecalho-img d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div <?= (!empty($i['novidade']))? "class='novidade'" : "class='d-none'"?>>
                        <?= $i['novidade'];?>
                    </div>
                    <div class="titulo-cabecalho col-6 <?= ($i['novidade'] == '1')? 'mt-2' : "mt-4"?>">
                        <?=$i['titulo']?>
                    </div>
                    <div class="texto-cabecalho col-7 mt-2">
                        <?=$i['descricao']?>
                    </div>
                    <div class="btn-text-left mt-2 mt-lg-4">
                        <a href="<?=$i['link']?>">
                            <button class="saber-mais"></button>
                        </a>
                    </div>
                </div>
            </div>
            <?php $j++; ?>
            <?php endforeach;?>                    
        </div>               
       </div> 
      </div>



       <div class="header-mobile">
        <div class="row cima">
           <div class="col-10 titulo">Sebastião Alves</div>
           
           <nav class="col-2 navbar">
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
               <ul class="navbar-nav d-flex gap-3">
                  <li class="nav-item">
                      <a class="nav-link menu <?=($rota[0] == "")? 'selected': ''?>" aria-current="page" href="<?=$url_base?>">home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link menu <?=($rota[0] == "autor")? 'selected': ''?>" aria-current="page" href="<?=$url_base . 'autor';?>">autor</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a id="livrosmenu" class="nav-link dropdown-toggle menu <?=($rota[0] == "livros")? 'selected': ''?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          livros
                      </a>
                      <ul class="dropdown-menu">
                        <?php for($i = 0; $i < count($livros); $i++): ?>
                            <li>
                                <a class="dropdown-item submenu" href="<?=$url_base . 'livros/' . $livros[$i]["id"]?>"> 
                                    <?=$livros[$i]["titulo"]?>
                                </a>
                            </li>
                        <?php endfor ?>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link menu <?=($rota[0] == "imprensa")? 'selected': ''?>" aria-current="page" href="<?=$url_base . 'imprensa/1';?>">imprensa</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link menu <?=($rota[0] == "contactos")? 'selected': ''?>" aria-current="page" href="<?=$url_base . 'contactos';?>">contactos</a>
                  </li>
                </ul>
            </div>
          </nav>
          <div class="col-12 linha-mobile"></div>
       </div>

       <div id="cabecalho2" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
              <?php for($i = 0; $i < count($imagens); $i++): ?>
                  <li data-bs-target="#cabecalho2" data-bs-slide-to="<?=$i?>" <?=($i == 0)? 'class="active" aria-current="true"' : ''?> aria-label="Slide <?=$i+1?>"></li>
              <?php endfor; ?>
          </ol>

          <div class="carousel-inner">
             
              
                <?php $j = 0; ?>
                <?php foreach($imagens as $i): ?>
                
                <div class="carousel-item <?=($j == 0)?'active' : ''?>">
                <img src="<?=$i['imagem_mobile']?>" class="cabecalho-img d-block w-100" alt="...">
                <div class="carousel-caption d-block d-md-none">
                    <div <?= (!empty($i['novidade']))? "class='novidade'" : "class='d-none'"?>>
                        <?= $i['novidade'];?>
                    </div>
                    <div class="titulo-cabecalho col-12 <?= ($i['novidade'] == '1')? 'mt-2' : "mt-4"?>">
                        <?=$i['titulo']?>
                    </div>
                    <div class="texto-cabecalho col-12 mt-2">
                        <?=$i['descricao']?>
                    </div>
                    <div class="btn-text-left mt-4">
                        <a href="<?=$i['link']?>">
                            <button class="saber-mais"></button>
                        </a>
                    </div>
                </div>
            </div>
            <?php $j++; ?>
            <?php endforeach;?>            
          </div>               
        </div>
  
       

     </header>