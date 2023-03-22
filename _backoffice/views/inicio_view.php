<main class="container">
    <div class="row">
        <div class="col-11 mx-auto text-center ">
            <h3>Bem-vindo (<?= $_SESSION["user"]["user"]; ?>)</h3>
            <br><br>
            <h4>Data do último acesso: <?= $_SESSION["user"]["last_login"]; ?></h4>
        </div>
    </div>
</main>