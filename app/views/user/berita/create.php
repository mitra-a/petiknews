<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="">
                <h3 class="h5 mb-0">Berita</h3>
                <p class="text-muted mb-0">Tambah Berita</p>
            </div>
        </div>
        <div class="col-lg-6 col-12 d-flex">
            <div class="ml-auto">
                <a href="<?= base_url ?>/userberita" class="btn btn-secondary mb-4">Kembali</a>
            </div>
        </div>
    </div>

    <?= Flasher::MessageValidate() ?>

    <form class="card" method="POST" action="<?= base_url ?>/userberita/tambah" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" value="<?= Flasher::MessageOld('judul') ?>">
            </div>

            <div class="form-group">
                <label>Kategori</label>

                <?php foreach(GetKategori::get() as $item){ ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kategori" id="kategori-list-<?= $item['id'] ?>" value="<?= $item['id'] ?>"  <?= (Flasher::MessageOld('kategori') == $item['id']) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="kategori-list-<?= $item['id'] ?>"><?= $item['kategori'] ?></label>
                    </div>
                <?php } ?>
            </div>
            
            <div class="form-group">
                <label>Teras Berita</label>
                <textarea type="text" name="teras_berita" class="form-control" rows="5"><?= Flasher::MessageOld('teras_berita') ?></textarea>
            </div>
            
            <div class="form-group">
                <label>Konten</label>
                <textarea type="text" name="konten" class="form-control summernote" rows="5"><?= Flasher::MessageOld('konten') ?></textarea>
            </div>
            
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="<?= Flasher::MessageOld('tanggal') ?>">
            </div>

            <div class="form-group">
                <label>gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div>

            <hr />

            <div class="d-flex">
                <button class="btn btn-primary ml-auto">Simpan</button>
            </div>
        </div>
    </form>

    <?= Flasher::removeMessageOld() ?>
</div>