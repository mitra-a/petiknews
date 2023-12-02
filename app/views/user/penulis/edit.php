<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="">
                <h3 class="h5 mb-0">Penulis</h3>
                <p class="text-muted mb-0">Tambah Penulis</p>
            </div>
        </div>
        <div class="col-lg-6 col-12 d-flex">
            <div class="ml-auto">
                <a href="<?= base_url ?>/userpenulis" class="btn btn-secondary mb-4">Kembali</a>
            </div>
        </div>
    </div>

    <?= Flasher::MessageValidate() ?>

    <form class="card" method="POST" action="<?= base_url ?>/userpenulis/edit/<?= $data['id'] ?>">
        <div class="card-body">
            <div class="form-group">
                <label>Nama</label>
                <input  value="<?= $data['nama'] ?>" name="nama" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input  value="<?= $data['email'] ?>" name="email" type="email" class="form-control">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control">
            </div>

            <div class="form-group">
                <label>Ulangi Password</label>
                <input name="password_ulang" type="password" class="form-control">
            </div>

            <hr />

            <div class="d-flex">
                <button class="btn btn-primary ml-auto">Simpan</button>
            </div>
        </div>
    </form>

    <?= Flasher::removeMessageOld() ?>
</div>