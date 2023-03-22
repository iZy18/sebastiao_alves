<main class="container">
    <div class="row">
        <div class="col-12 mx-auto text-center">
            <h2 class="mb-5">Autor</h2>
            <form action="" method="POST">
            <label class="fs-3" for="imagem_autor">Imagem AUTOR</label>
            <br>
            <input type="text" name="img_autor" placeholder="Imagem AUTOR" value="<?= $autor["imagem"]; ?>">
            <a href="<?= $url_base; ?>gestor/gestor.php" target="_blank"><button type="button">Gestor</button></a>
            <br><br>
            <label class="fs-3" for="texto_autor">Descrição (Autor):</label>
            <br>
            <textarea id="editor" name="texto_autor" placeholder="Descrição" cols="80" rows="10"><?= $autor["texto"]; ?></textarea>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>

            <br><br>
            
            <input type="submit" value="Gravar">
             

            </form>
        </div> 
    </div>
</main>