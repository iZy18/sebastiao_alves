<main class="container">
    <div class="row">
        <div class="col-12 mx-auto text-center">
            <h2 class="mb-5">Home</h2>
            <form action="" method="POST">
                <label class="fs-3" for="foto_autor">Imagem Autor</label>
                <br>
                <input type="text" name="foto_autor" placeholder="Imagem" value="<?= $home["foto_autor"]; ?>">
                <a href="<?= $url_base; ?>system/gestor/tinyfilemanager-master/tinyfilemanager.php" target="_blank"><button type="button">Gestor</button></a>
                <br><br>
                <label class="fs-3" for="ultimos_livros">Últimos Livros(Texto):</label>
                <br>
                <textarea id="editor" name="ultimos_livros" placeholder="Texto" cols="80" rows="10"><?= $home["ultimos_livros"]; ?></textarea>
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
            <br><br>
            <a href="<?= $url_base ;?>backoffice/destaques";><button>Destaques</button></a>
        </div> 
    </div>
</main>