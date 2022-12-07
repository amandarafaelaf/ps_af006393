<div class="container">

    <div class="row">
        <div class="col-6 d-flex flex-column justify-content-center">
            <div class="text-center">
                <h1><?= $categoria['nome'] ?></h1>
            </div>
            <div class=" text-center">
                <?= $categoria['descricao'] ?>
            </div>
        </div>
        <div class="col-6">
            <img src="<?= $categoria['imagens'][0]['url'] ?>" class="img-fluid w-100" alt="<?= $categoria['nome'] ?>">
        </div>

    </div>

    <hr>

</div>