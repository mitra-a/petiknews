<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petik News</title>

    <link rel=icon href="<?= base_url ?>/logo/logo.png" type=image/png> 
    <link rel=stylesheet href="<?= base_url ?>/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css">
    <link rel=stylesheet href="<?= base_url ?>/css/quick-website.css" id=stylesheet>
    <link rel=stylesheet href="<?= base_url ?>/css/style.css" id=stylesheet>
    <link rel=stylesheet href="<?= base_url ?>/libs/%40fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url ?>/css/slider.css">

    <style>
        @keyframes  hidePreloader {
            0% {
                width: 100%;
                height: 100%
            }

            100% {
                width: 0;
                height: 0
            }
        }

        body>div.preloader {
            position: fixed;
            background: #fff;
            width: 100%;
            height: 100%;
            z-index: 1071;
            opacity: 0;
            transition: opacity .5s ease;
            overflow: hidden;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center
        }

        body:not(.loaded)>div.preloader {
            opacity: 1
        }

        body:not(.loaded) {
            overflow: hidden
        }

        body.loaded>div.preloader {
            animation: hidePreloader .5s linear .5s forwards
        }

        .boxnews{
            height: 100%; 
            overflow: hidden;
        }

        .boxnews:hover div img {
            transform: scale(1.2);
        }

        .boxnews div img {
            transition: 500ms;
        }
    </style>

    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.querySelector("body").classList.add("loaded")
            }, 300)
        })
    </script>
</head>

<body class="d-flex flex-column" style="min-height: 100vh">
    <div class="preloader">
        <div class="spinner-border text-primary" role=status><span class=sr-only>Loading...</span></div>
    </div>

    <header class="sticky-top bg-white border-bottom" id=header-main>
        <nav class="navbar navbar-main navbar-expand-lg navbar-light" id="navbar-main">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse"
                    aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url ?>">
                    <img alt="Petik News" src=<?= base_url ?>/logo/logo-text.png class="mt-n2" id=navbar-logo
                    style="height:55px!important">
                </a>
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

                    <ul class="navbar-nav ml-lg-auto">
                        <a class="nav-link" href="<?= base_url ?>">Home</a>
                        <a class="nav-link" href="<?= base_url ?>/selengkapnya">Berita</a>
                        <a class="nav-link" href="<?= base_url ?>/kritik">Kritik dan Saran</a>
                        <a class="nav-link" href="<?= base_url ?>/bukutamu">Buku Tamu</a>
                    </ul>

                    <ul class="navbar-nav align-items-lg-center d-flex d-lg-flex ml-lg-auto">
                        <li class="nav-item p-0 px-lg-2">
                            <button class="btn btn-sm btn-secondary w-100" data-toggle="modal" data-target="#modal-search">
                                <i class="fa fa-search"></i>
                            </button>
                        </li>
                        
                        <?php if(isset($_SESSION['auth']['id'])) { ?>

                        <li class="nav-item p-0 position-relative">
                            <button 
                                class="btn btn-sm btn-secondary dropdown-toggle w-100" 
                                type="button" 
                                data-toggle="dropdown" 
                                aria-expanded="false"
                            >
                                <i class="fa fa-user"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-right mt-2">
                                <?php if(in_array($_SESSION['auth']['role'], ['admin', 'penulis'])) { ?>
                                    <a class="dropdown-item" href="<?= base_url ?>/user">Dashboard</a>
                                <?php } ?>
                                
                                <a class="dropdown-item" href="<?= base_url ?>/profile">Profile</a>
                                <a class="dropdown-item" href="<?= base_url ?>/logout">Logout</a>
                            </div>
                        </li>

                        <?php } else { ?>

                        <li class="nav-item p-0">
                            <a class="btn btn-sm btn-primary px-lg-4 w-100" href="<?= base_url ?>/login">
                                Login
                            </a>
                        </li>

                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <?php if(isset($data['nav-bar-active'])) { ?>
        <nav class="navbar navbar-horizontal navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-info" aria-controls="navbar-info" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar-info">
                    <ul class="navbar-nav">
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link bg-primary rounded py-2 px-3 mr-2" href="<?= base_url ?>">
                                <span class="nav-link-inner--text text-white">Semua Kategori</span>
                            </a>
                        </li>

                        <?php foreach(GetKategori::get() as $item){ ?>
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="<?= base_url ?>/<?= strtolower($item['kategori']) ?>">
                                    <span class="nav-link-inner--text"><?= $item['kategori'] ?></span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    <?php } ?>

    <div class="modal fade" id="modal-search">
        <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cari Berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-section-fade">
                    <div class="d-flex">
                        <input type="text" class="form-control" placeholder="Cari berita" id="input-search-berita">
                        <button class="btn btn-secondary btn-sm ml-2" id="button-search-berita"><i class="fa fa-search"></i></button>
                    </div>

                    <div class="content-berita">
                        <div class="text-center mb-3 mt-5">
                            <h4 class="fa fa-search"></h4>
                            <h4>Silahkan Cari Berita</h4>
                        </div>

                    </div>
                </div>

                <script>
                    document.querySelector('#button-search-berita').addEventListener('click', function(){
                        let search = document.querySelector("#input-search-berita");

                        fetch('<?= base_url ?>/berita/cari/' + search.value)
                            .then((response) => response.json())
                            .then((data) => {
                                let newContent = "";
                                let content = document.querySelector(".content-berita");
                                
                                for(let index in data){
                                    newContent += `
                                        <div class="d-flex mt-3">
                                            <div>
                                                <img src="<?= base_url ?>/${data[index].gambar}" class="border" height="100px" width="150px" style="object-fit:cover">
                                            </div>
                                            <div class="ml-3 d-flex flex-column align-items-between">
                                                <a class="h5" href="<?= base_url ?>/berita/${data[index].id}">${data[index].judul}</a>
                                                <span>${data[index].tanggal}</span>
                                            </div>
                                        </div>
                                    `
                                }

                                if(!data.length){
                                    newContent = `
                                        <div class="text-center mb-3 mt-5">
                                            <h4 class="fa fa-search"></h4>
                                            <h4>Tidak ada berita ditemukan</h4>
                                        </div>
                                    `;
                                }

                                content.innerHTML = newContent;
                            });
                    })

                </script>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-login">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button style="background-color: transparent" class="nav-link active" id="login-tab" data-toggle="tab" data-target="#login-pane" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button style="background-color: transparent" class="nav-link" id="register-tab" data-toggle="tab" data-target="#register-pane" type="button" role="tab" aria-controls="register" aria-selected="false">Register</button>
                        </li>
                    </ul>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-section-fade">