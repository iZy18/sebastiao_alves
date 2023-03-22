<main class="container">

    <?php if($acao != "editar"): ?>

    <div class="row">
        <div class="col-10 text-center mx-auto border border-secondary p-3">
            <h2 class="my-3">Banner (Carrousel)</h2>
            <h4 class="mb-3">Novo</h4>
            <form action="" method="POST">

                <input type="hidden" name="acao" value="novo">

                <input type="text" name="titulo" placeholder="Titulo" required="required">
                <br><br>
                <textarea id="editor" name="texto" placeholder="Descrição" cols="80" rows="10"></textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
                <br><br>
                <input type="text" name="imagem_desktop" placeholder="Imagem Desktop" required="required">
                <a href="<?= $url_base; ?>gestor/gestor.php" target="_blank"><button type="button">Gestor</button></a>
                <br><br>
                <input type="text" name="imagem_mobile" placeholder="Imagem Mobile" required="required">
                <a href="<?= $url_base; ?>gestor/gestor.php" target="_blank"><button type="button">Gestor</button></a>
                <br><br>
                <input type="text" name="novidade" placeholder="Destaque">
                <br><br>
                <input type="submit" value="Registar">
            </form>
        </div> 
    </div>

    <br><br>

    <div class="row">
        <div class="col">

            <h4 class="mb-3 text-center">Editar / Apagar</h4>
            <table class="w-100 my-3">
                <tr>
                    <th>ID</th>
                    <th>IMAGEM DESKTOP</th>
                    <th>IMAGEM MOBILE</th>
                    <th>TITULO</th>
                    <th>SUBTÍTULO</th>
                    <th>DESTAQUE</th>
                    <th>LINK SABER MAIS</th>
                    <th>AÇÕES</th>
                </tr>

                <?php foreach($carrousel as $c): ?>

                    <tr>
                        <td><?= $c["id"]; ?></td>
                        <td>
                            <img src="<?= $c["imagem"];?>" alt="Livro" style="max-width:100px;">
                        </td>
                        <td>
                            <img src="<?= $c["imagem_mobile"];?>" alt="Livro" style="max-width:100px;">
                        </td>
                        <td><?= $c["titulo"]; ?></td>
                        <td><?= $c["descricao"]; ?></td>
                        <td><?= $c["novidade"]; ?></td>
                        <td><?= $c["link"]; ?></td>
                        <td>
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?= $c["id"]; ?>">
                                <input type="submit" name="acao" value="editar">
                                <br><br>
                                <input type="submit" name="acao" value="apagar">
                            </form>
                        </td>
                    </tr>

                <?php endforeach; ?>    
            </table>
        </div>
    </div>

    <?php else: ?>

        <div class="row">
            <div class="col-10 text-center mx-auto">
                <h2 class="my-3">Livros</h2>
                <h4 class="mb-3">Editar</h4>
                <form action="" method="POST">

                    <input type="hidden" name="acao" value="editar_fim">
                    <input type="hidden" name="id" value="<?= $c_editar["id"]; ?>">

                    <input type="text" name="titulo" value="<?= $c_editar["titulo"]; ?>" placeholder="titulo" required="required">
                    <br><br>
                    <textarea id="editor" name="texto" placeholder="Descrição"  cols="80" rows="10" ><?= $c_editar["descricao"]; ?></textarea>
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
                    <br><br>
                    <label for="">Imagem Desktop</label>
                    <input type="text" name="imagem_desktop" placeholder="Imagem Desktop" value="<?= $c_editar["imagem"]; ?>" required="required">
                    <a href="<?= $url_base; ?>gestor/gestor.php" target="_blank"><button type="button">Gestor</button></a>

                    <br><br>
                    <label for="">Imagem Mobile</label>
                    <input type="text" name="imagem_mobile" placeholder="Imagem Mobile" value="<?= $c_editar["imagem_mobile"]; ?>" required="required" >
                    <a href="<?= $url_base; ?>gestor/gestor.php" target="_blank"><button type="button">Gestor</button></a>
                    <br><br>
                    <input type="text" name="novidade" placeholder="Destaque" value="<?= $c_editar["novidade"]; ?>">
                    <br><br>
                    <input type="text" name="link" placeholder="Link Saber Mais" value="<?= $c_editar["link"]; ?>" required="required">
        
                    <br><br>
                    <input type="submit" value="Registar">
                </form>
            </div> 
        </div>
    <?php endif; ?>    

</main>