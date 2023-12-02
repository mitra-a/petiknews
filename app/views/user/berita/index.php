<div class="container mt-4">
    <div class="row">
        <form action="<?= base_url ?>/userberita" method="POST" class="col-lg-6 col-12">
            <input 
                type="text" 
                class="form-control"
                placeholder="Cari berita" 
                onsubmit="this.form.submit"
                name="cari"
                value="<?= isset($_POST['cari']) ? $_POST['cari'] : '' ?>">
        </form>
        <div class="col-lg-6 col-12 d-flex">
            <div class="ml-auto">
                <a href="<?= base_url ?>/userberita/tambah" class="btn btn-primary mb-4">Tambah Berita</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 1px;">GAMBAR</th>
                        <th>JUDUL BERITA</th>
                        <th>PENULIS</th>
                        <th>HEADLINE</th>
                        <th style="width: 1px;">AKSI</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php foreach($data['berita'] as $item){ ?>
                    <tr>
                        <td>
                            <img src="<?= base_url . '/' . $item["gambar"] ?>" width="250px" class="rounded border">
                        </td>
                        <td style="white-space: pre-wrap"><?= $item["judul"] ?></td>
                        <td><?= $item["nama"] ?></td>
                        <td>
                            <form method="POST" action="<?= base_url ?>/userberita/status/<?= $item['id'] ?>" class="custom-control custom-switch">
                                <input type="hidden" name="status" value="1">
                                <input 
                                    type="checkbox" 
                                    class="custom-control-input" 
                                    id="custom-switch-<?= $item['id'] ?>"
                                    onChange="this.form.submit()"
                                    <?= $item['headline'] ? 'checked' : '' ?>
                                >
                                <label class="custom-control-label" for="custom-switch-<?= $item['id'] ?>"></label>
                            </form>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <a href="<?= base_url ?>/userberita/edit/<?= $item['id'] ?>" class="btn btn-sm btn-secondary ml-0 mt-2">Edit</a>
                                <a href="<?= base_url ?>/userberita/hapus/<?= $item['id'] ?>" class="btn btn-sm btn-secondary ml-0 mt-2">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>