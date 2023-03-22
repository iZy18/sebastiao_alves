<main class="container">
    <div class="row senha">
        <div class="col-6 mx-auto text-center">
            <h2 class="mb-5">Configurações</h2>
            <h3 class="mb-5">Alterar Senha</h3>
            <?php if(!$valido) : ?>

                <h3 class="text-danger">Operação inválida</h3>

            <?php endif; ?>
            <form action="" method="POST">
            <input type="password" name="senha" placeholder="Senha Actual">
            <br><br>
            <input type="password" name="nova_senha" placeholder="Nova Senha">
            <br><br>
            <input type="password" name="nova_senha_rep" placeholder="Digite Novamente a Nova Senha">
            <br><br>
            <input class="text-dark" type="submit" value="gravar">
            </form>
        </div>
    </div>
</main>