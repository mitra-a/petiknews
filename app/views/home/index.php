<style>
    .carousel:hover > .carousel-control > .carousel-item-button {
        background-color: #171347;
        padding: 10px;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 100px;
        transition: 0.5s;
    }

    .carousel-control {
        opacity: 1;
    }
</style>

<div class="container pt-5 mb-5">
    <?= Flasher::MessageValidate() ?>

    <div id="carousel-headline" class="carousel slide" data-ride="carousel">
        <!-- <ol class="carousel-indicators">
            <?php foreach([0,1,2,3,4] as $item) { ?>
            <li data-target="#carousel-headline" data-slide-to="<?= $item ?>" class="<?= $item == 0 ? 'active' : '' ?>"></li>
            <?php } ?>
        </ol> -->

        <div class="carousel-inner">
            <?php foreach($data['headline'] as $index => $item) { ?>
            <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <img class="d-block w-100 rounded"  style="aspect-ratio: 4/3; object-fit:cover" src="<?= base_url ?>/<?= $item['gambar'] ?>" alt="First slide">
                    </div>
                    <div class="col-lg-6 col-12 d-flex flex-column">
                        <h3 class="mb-4 mt-3 mt-lg-0"><?= $item['judul'] ?></h3>

                        <p><span class="badge badge-primary mr-3"><?= strtoupper($item['kategori']) ?></span> <?= $item['tanggal'] ?></p>

                        <p><?= $item['teras_berita'] ?></p>

                        <a href="<?= base_url ?>/berita/<?= $item['id'] ?>" class="mt-auto">
                            <button type="button" class="btn btn-animated btn-primary btn-animated-x">
                                <span class="btn-inner--visible">Selengkapnya</span>
                                <span class="btn-inner--hidden"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg></span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

        <a class="carousel-control carousel-control-prev opacity-100" href="#carousel-headline" role="button" data-slide="prev">
            <div class="carousel-item-button">
                <i class="fas fa-angle-left"></i>
            </div>
        </a>
        <a class="carousel-control carousel-control-next opacity-100" href="#carousel-headline" role="button" data-slide="next">
            <div class="carousel-item-button">
                <i class="fas fa-angle-right"></i>
            </div>
        </a>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row mb-5 justify-content-center text-center">
        <div class="col-lg-8 col-md-10">
            <h2 class="mt-4 text-primary">Berita Terbaru</h2>
            <div class="mt-2">
                <p class="lead lh-180">Berita terkini, terpercaya dan terakurat.</p>
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

    <div class="text-center mt-3">
        <a href="<?= base_url ?>/selengkapnya">
            <button type="button" class="btn btn-animated btn-primary btn-animated-x">
                <span class="btn-inner--visible">Selengkapnya</span>
                <span class="btn-inner--hidden"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg></span>
            </button>
        </a>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row mb-5 justify-content-center text-center">
        <div class="col-lg-8 col-md-10">
            <h2 class="mt-4 text-primary">Tim Redaksi</h2>
        </div>
    </div>

    <div class="row">
        <?php foreach([
            [
                'nama' => 'Mitra',
                'gambar' => 'img/mitra.jpg',
                'instagram' => 'https://www.instagram.com/m1tt___/',
            ],
            [
                'nama' => 'Muh Alfian Hanafih',
                'gambar' => 'img/alfian.jpg',
                'instagram' => 'https://www.instagram.com/m_alfiannn/',
            ],
            [
                'nama' => 'Anugerah Araaf Disman',
                'gambar' => 'img/uga.jpg',
                'instagram' => 'https://www.instagram.com/anugeraharaaf/',
            ],
            [
                'nama' => 'Nurman Hidayat',
                'gambar' => 'img/nurman.jpg',
                'instagram' => 'https://www.instagram.com/',
            ],
        ] as $item){ ?>
            <div class="col-lg-3 col-sm-6 mb-5">
                <div data-animate-hover="2">
                    <div class="animate-this">
                        <a href="#">
                            <img alt="Image placeholder" class="img-fluid rounded shadow" src="<?= base_url ?>/<?= $item['gambar']  ?>">
                        </a>
                    </div>
                    <div class="mt-3">
                        <h5 class="h6 mb-0"><?=  $item['nama'] ?></h5>
                        <p class="text-muted text-sm mb-0">Penulis</p>
                        <a href="<?= $item['instagram'] ?>" class="btn mt-3 btn-primary btn-sm">
                            <i class="fab fa-instagram mr-2"></i>
                            Instagram
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?= Flasher::removeMessageOld() ?>