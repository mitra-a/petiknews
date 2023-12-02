<header class="bg-white border-bottom" id=header-main>
    <nav class="navbar navbar-main navbar-expand-lg navbar-light" id="navbar-main">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse"
                aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-collapse-overlay" id="navbar-main-collapse">
                <div class="position-relative">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                
                <ul class="navbar-nav">
                    <li class="nav-item nav-item-spaced d-none d-lg-block"><a class="nav-link" href="<?= base_url ?>/user/dashboard">Dashboard</a></li>
                    <li class="nav-item nav-item-spaced d-none d-lg-block"><a class="nav-link" href="<?= base_url ?>/userberita">Berita</a></li>
                    <li class="nav-item nav-item-spaced d-none d-lg-block"><a class="nav-link" href="<?= base_url ?>/userkategori">Kategori</a></li>

                    <?php if($_SESSION['auth']['role'] == 'admin'){ ?>
                    <li class="nav-item nav-item-spaced d-none d-lg-block"><a class="nav-link" href="<?= base_url ?>/userpenulis">Penulis</a></li>
                    <li class="nav-item nav-item-spaced d-none d-lg-block"><a class="nav-link" href="<?= base_url ?>/userkritikdansaran">Kritik dan Saran</a></li>
                    <li class="nav-item nav-item-spaced d-none d-lg-block"><a class="nav-link" href="<?= base_url ?>/userbukutamu">Buku Tamu</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</header>