<div class="container mt-4">
    <div class="row">
        <form action="<?= base_url ?>/userpenulis" method="POST" class="col-lg-6 col-12">
            <input 
                type="text" 
                class="form-control"
                placeholder="Cari penulis" 
                onsubmit="this.form.submit"
                name="cari"
                value="<?= isset($_POST['cari']) ? $_POST['cari'] : '' ?>">
        </form>
        <div class="col-lg-6 col-12 d-flex">
            <div class="ml-auto">
                <a href="<?= base_url ?>/userpenulis/tambah" class="btn btn-primary mb-4">Tambah Penulis</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>NAMA PENULIS</th>
                        <th style="width: 1px;">AKSI</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php foreach($data['penulis'] as $item){ ?>
                    <tr>
                        <th><?= $item["nama"] ?></th>
                        <th>
                            <a href="<?= base_url ?>/userpenulis/edit/<?= $item['id'] ?>" class="btn btn-sm btn-secondary">Edit</a>
                            <a href="<?= base_url ?>/userpenulis/hapus/<?= $item['id'] ?>" class="btn btn-sm btn-secondary">Hapus</a>
                        </th>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>