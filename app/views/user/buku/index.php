<div class="container mt-4">
    <div class="row mb-4">
        <form action="<?= base_url ?>/userbukutamu" method="POST" class="col-lg-6 col-12">
            <input 
                type="text" 
                class="form-control"
                placeholder="Cari tamu" 
                onsubmit="this.form.submit"
                name="cari"
                value="<?= isset($_POST['cari']) ? $_POST['cari'] : '' ?>">
        </form>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NAMA</th>
                            <th>EMAIL</th>
                            <th>TANGGAL</th>
                            <th>TUJUAN KUNJUNGAN</th>
                            <th style="width: 1px;">AKSI</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php foreach($data['kritik'] as $item){ ?>
                            <tr>
                                <td><?= $item["nama"] ?></td>
                                <td><?= $item["email"] ?></td>
                                <td><?= $item["tanggal"] ?></td>
                                <td style="white-space: pre-wrap"><?= $item["tujuan"] ?></td>
                                <td>
                                    <a href="<?= base_url ?>/userbukutamu/hapus/<?= $item['id'] ?>" class="btn btn-sm btn-secondary">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>