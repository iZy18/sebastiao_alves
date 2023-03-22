<main class="container">

    <?php if($acao != "editar"): ?>

    <div class="row">
        <div class="col-10 text-center mx-auto border border-secondary p-3">
            <h2 class="my-3">Livros</h2>
            <h4 class="mb-3">Novo</h4>
            <form action="" method="POST">

                <input type="hidden" name="acao" value="novo">

                <input type="text" name="titulo" placeholder="Titulo" required="required">
                <br><br>
                <textarea id="editor" name="descricao" placeholder="Texto" cols="80" rows="10"></textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
                <br><br>
                <input type="text" name="imagem" placeholder="Imagem" required="required">
                <a href="<?= $url_base; ?>gestor/gestor.php" target="_blank"><button type="button">Gestor</button></a>
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
                    <th>IMAGEM</th>
                    <th>TITULO</th>
                    <th>DESCRIÇÃO</th>
                    <th>AÇÕES</th>
                </tr>

                <?php foreach($livros as $l): ?>

                    <tr>
                        <td><?= $l["id"]; ?></td>
                        <td>
                            <img src="<?= $l["link"];?>" alt="Livro" style="max-width:100px;">
                        </td>
                        <td><?= $l["titulo"]; ?></td>
                        <td><?= substr($l["descricao"], 0, 100); ?>...</td>
                        <td>
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?= $l["id"]; ?>">
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
            <div class="col-10 text-center mx-auto p-3">
                <h2 class="my-3">Livros</h2>
                <h4 class="mb-3">Novo</h4>
                <form action="" method="POST">

                    <input type="hidden" name="acao" value="editar_livro">
                    <input type="hidden" name="id" value="<?= $livro_editar["id"]; ?>">

                    <input type="text" name="titulo" value="<?= $livro_editar["titulo"]; ?>" placeholder="titulo" required="required">
                    <br><br>
                    <textarea id="editor" name="descricao" placeholder="texto"  cols="80" rows="10"><?= $livro_editar["descricao"]; ?></textarea>
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
                    <br><br>
                    <input type="text" name="imagem" placeholder="Imagem" value="<?= $livro_editar["link"]; ?>" required="required">
                    <a href="<?= $url_base; ?>gestor/gestor.php" target="_blank"><button type="button">Gestor</button></a>
                    <br><br>
                    
                    <input type="submit" value="Registar">
                </form>
            </div> 
        </div>
    <?php endif; ?>    

</main>