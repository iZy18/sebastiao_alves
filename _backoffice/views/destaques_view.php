<main class="container">
    <div class="row">
        <div class="col-12 mx-auto text-center">
            <h2 class="mb-5">Destaques</h2>
            <form action="" method="POST">
                <label for="">Destaque 1</label>
                <select name="destaque1" id="">
                    <option value="0">---</option>
                    <?php foreach($livro as $l): ?>

                        <option <?=($destaques["destaque_1"] == $l["id"]) ? 'selected' : '' ?> value="<?=$l["id"]?>"><?=$l["titulo"]?></option>

                    <?php endforeach;?>
                </select>
                <input type="text" name="destaque1_destaque" value="<?= ($destaques["destaque_1"] != 0) ? getLivroDestaque($destaques["destaque_1"])["destaque"] : '';?>">
                <br>
                <label for="">Destaque 2</label>
                <select name="destaque2" id="">
                    <option value="0">---</option>
                    <?php foreach($livro as $l): ?>

                        <option <?=($destaques["destaque_2"] == $l["id"]) ? 'selected' : '' ?> value="<?=$l["id"]?>"><?=$l["titulo"]?></option>

                    <?php endforeach;?>
                </select>
                <input type="text" name="destaque2_destaque" value="<?= ($destaques["destaque_2"] != 0) ? getLivroDestaque($destaques["destaque_2"])["destaque"] : '';?>">
                <br>
                <label for="">Destaque 3</label>
                <select name="destaque3" id="">
                    <option value="0">---</option>
                    <?php foreach($livro as $l): ?>

                        <option <?=($destaques["destaque_3"] == $l["id"]) ? 'selected' : '' ?> value="<?=$l["id"]?>"><?=$l["titulo"]?></option>

                    <?php endforeach;?>
                </select>
                <input type="text" name="destaque3_destaque" value="<?= ($destaques["destaque_3"] != 0) ? getLivroDestaque($destaques["destaque_3"])["destaque"] : '';?>">
                <br>
                
                
                <input name="submit" type="submit" value="Guardar">
            </form>
        </div> 
    </div>
</main>