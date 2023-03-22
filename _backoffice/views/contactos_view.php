<main class="container contatos">
    <div class="row">
        <div class="col-12 mx-auto text-center">
            <h2 class="mb-5">Contactos</h2>
            <form action="" method="POST">
            <label class="fs-3" for="morada">Morada:</label><br>
            <input type="text" name="morada" placeholder="Morada" value="<?= $contactos["morada"]; ?>">
            <br><br>
            <label class="fs-3" for="morada">Telefone:</label><br>
            <input type="text" name="telefone" placeholder="Telefone" value="<?= $contactos["telefone"]; ?>">
            <br><br>
            <label class="fs-3" for="morada">Email:</label><br>
            <input type="text" name="email" placeholder="Email" value="<?= $contactos["email"]; ?>">
            <br><br>
            <label class="fs-3" for="morada">Horário:</label><br>
            <input type="text" name="horario" placeholder="Horario" value="<?= $contactos["horario"]; ?>">
            <br><br>
            <input class="text-dark" type="submit" value="gravar">
             

            </form>
        </div> 
    </div>
</main>