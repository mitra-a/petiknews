<section class="slice pt-5 pb-7">
    <div class="container">
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-8 col-md-10">
                <span class="badge badge-primary badge-pill"><?= ucwords($data['kategori_name']) ?></span>
                <h2 class="mt-4">Berita <?= ucwords($data['kategori_name']) ?> Terbaru dan Terpercaya</h2>
                <div class="mt-2">
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach($data['berita'] as $item){ ?>
            <div class="col-xl-4 col-md-6">
                <div class="card hover-translate-y-n3 hover-shadow-lg overflow-hidden">
                    <div class="position-relative overflow-hidden" style="height:12.5rem">
                        <a href="" class="d-block">
                            <img alt="Image placeholder" src="<?= $item['gambar'] ?>" class="card-img-top">
                        </a>
                    </div>
                    <div class="card-body py-4">
                        <small class="d-block text-sm mb-2"></small>
                        <div style="height : 5.5rem;
                                    overflow:hidden;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 3;
                                    -webkit-box-orient: vertical;
                        ">
                            <a href="<?= base_url ?>/berita/<?= $item['id'] ?>" class="h5 stretched-link lh-150"><?= $item['judul'] ?></a>
                        </div>
                        <div class="mt-3">
                            <?= date_format(date_create($item['tanggal']), "Y F d"); ?>
                        </div>
                    </div>
                    
                </div>
            </div>  
            <?php } ?>   
        </div>
    </div>
</section>