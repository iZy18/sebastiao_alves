<main class="container">
    <div class="row">
        <div class="col-6 text-center mx-auto">

            <?php if($form): ?>

                <h3 class="text-danger"> Login INVÁLIDO</h3>
            
            <?php endif; ?>

            <form action="" method="POST">

                <input type="text" name="login" placeholder="Username" required="required" autofocus>

                <br><br>

                <input type="password" name="senha" placeholder="Password" required="required">

                <br><br>

                <input type="submit" value="Login">
            </form>
              
        </div>
    </div>
</main>