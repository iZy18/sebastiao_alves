<main class="container">
    <div class="row contatos">
        <div class="col-6 mx-auto text-center ">
            <h2 class="mb-5">Redes</h2>
            <form action="" method="POST">
            <label class="fs-3" for="Instagram">Instagram</label><br>
            <input type="text" name="instagram" placeholder="Instagram" value="<?= $redes["instagram"]; ?>">
            <br><br>
            <label class="fs-3" for="facebook">Facebook</label><br>
            <input type="text" name="facebook" placeholder="Facebook" value="<?= $redes["facebook"]; ?>">
            <br><br>
            <label class="fs-3" for="linkedin">Linkedin</label><br>
            <input type="text" name="linkedin" placeholder="Linkedin" value="<?= $redes["linkedin"]; ?>">
            <br><br>
            <input class="text-dark" type="submit" value="gravar">
            </form>
        </div> 
    </div>
</main>