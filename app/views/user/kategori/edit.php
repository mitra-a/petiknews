<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="">
                <h3 class="h5 mb-0">Kategori</h3>
                <p class="text-muted mb-0">Edit Kategori</p>
            </div>
        </div>
        <div class="col-lg-6 col-12 d-flex">
            <div class="ml-auto">
                <a href="<?= base_url ?>/userkategori" class="btn btn-secondary mb-4">Kembali</a>
            </div>
        </div>
    </div>

    <?= Flasher::MessageValidate() ?>

    <form class="card" method="POST" action="<?= base_url ?>/userkategori/edit/<?= $data['id'] ?>">
        <div class="card-body">
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?= $data['kategori'] ?>">
            </div>

            <hr />

            <div class="d-flex">
                <button class="btn btn-primary ml-auto">Simpan</button>
            </div>
        </div>
    </form>

    <?= Flasher::removeMessageOld() ?>
</div>