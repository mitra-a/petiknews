<div class="container mt-4">
    <div class="row">
        <form action="<?= base_url ?>/userkategori" method="POST" class="col-lg-6 col-12">
            <input 
                type="text" 
                class="form-control"
                placeholder="Cari kategori" 
                onsubmit="this.form.submit"
                name="cari"
                value="<?= isset($_POST['cari']) ? $_POST['cari'] : '' ?>">
        </form>
        <div class="col-lg-6 col-12 d-flex">
            <div class="ml-auto">
                <a href="<?= base_url ?>/userkategori/tambah" class="btn btn-primary mb-4">Tambah Kategori</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>KATEGORI</th>
                        <th style="width: 1px;">AKSI</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php foreach($data['kategori'] as $item){ ?>
                    <tr>
                        <th><?= $item["kategori"] ?></th>
                        <th>
                            <a href="<?= base_url ?>/userkategori/edit/<?= $item['id'] ?>" class="btn btn-sm btn-secondary">Edit</a>
                            <a href="<?= base_url ?>/userkategori/hapus/<?= $item['id'] ?>" class="btn btn-sm btn-secondary">Hapus</a>
                        </th>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>