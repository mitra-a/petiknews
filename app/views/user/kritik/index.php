<div class="container mt-4">
    <div class="row mb-4">
        <form action="<?= base_url ?>/userkritikdansaran" method="POST" class="col-lg-6 col-12">
            <input 
                type="text" 
                class="form-control"
                placeholder="Cari kritik dan saran" 
                onsubmit="this.form.submit"
                name="cari"
                value="<?= isset($_POST['cari']) ? $_POST['cari'] : '' ?>">
        </form>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>NAMA</th>
                        <th>TANGGAL</th>
                        <th>KRITIK</th>
                        <th style="width: 1px;">AKSI</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php foreach($data['kritik'] as $item){ ?>
                    <tr>
                        <th><?= $item["nama"] ?></th>
                        <th><?= $item["tanggal"] ?></th>
                        <th style="white-space: pre-wrap"><?= $item["komentar"] ?></th>
                        <th>
                            <a href="<?= base_url ?>/userkritikdansaran/hapus/<?= $item['id'] ?>" class="btn btn-sm btn-secondary">Hapus</a>
                        </th>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>