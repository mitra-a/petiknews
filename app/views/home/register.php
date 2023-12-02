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

    <a href="<?= base_url ?>" class="btn btn-white btn-icon-only rounded-circle position-absolute zindex-101 left-4 top-4 d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="right" title="" data-original-title="Go back">
        <span class="btn-inner--icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
        </span>
    </a>

    <section>
        <div class="bg-primary position-absolute h-100 top-0 left-0 zindex-100 col-lg-6 col-xl-6 zindex-100 d-none d-lg-flex flex-column justify-content-end" data-bg-size="cover" data-bg-position="center">
            <img src="https://preview.webpixels.io/quick-website-ui-kit/assets/img/theme/light/img-v-2.jpg" alt="Image" class="img-as-bg">
        </div>
        <div class="container-fluid d-flex flex-column">
            <div class="row align-items-center justify-content-center justify-content-lg-end min-vh-100">
                <div class="col-sm-7 col-lg-6 col-xl-6 py-6 py-md-0">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-10 col-xl-6">
                            <div>
                                <div class="mb-5">
                                    <h6 class="h3 mb-1">Buat akun</h6>
                                    <p class="text-muted mb-0">Buat akun dan gunakan akunmu untuk melanjutkan.</p>
                                </div>

                                <?= Flasher::MessageValidate() ?>
                                <span class="clearfix"></span>
                                <form method="POST" action="<?= base_url ?>/register">
                                    <div class="form-group">
                                        <label class="form-control-label">Nama</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                </span>
                                            </div>
                                            <input type="text" name="nama" class="form-control" id="input-nama" placeholder="name@example.com">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Email address</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                </span>
                                            </div>
                                            <input type="email" name="email" class="form-control" id="input-email" placeholder="name@example.com">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <label class="form-control-label">Password</label>
                                            </div>
                                            <div class="mb-2">
                                                <a href="#" class="small text-muted text-underline--dashed border-primary" data-toggle="password-text" data-target="#input-password">Show password</a>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-key">
                                                        <path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control" name="password" id="input-password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <label class="form-control-label">Ulangi Password</label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-key">
                                                        <path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control" name="password_ulang" id="input-ulangi-password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-block btn-primary">Register</button>
                                    </div>
                                </form>

                                <div class="mt-4">
                                    <small>Sudah terdaftar?</small>
                                    <a href="<?=  base_url ?>/login" class="small font-weight-bold">Login disini</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<script src="<?= base_url ?>/libs/jquery/dist/jquery.min.js"> </script>
<script src="<?= base_url ?>/libs/bootstrap/dist/js/bootstrap.bundle.min.js"> </script>
<script src="<?= base_url ?>/libs/svg-injector/dist/svg-injector.min.js"> </script>
<script src="<?= base_url ?>/libs/feather-icons/dist/feather.min.js"> </script>
<script src="<?= base_url ?>/libs/in-view/dist/in-view.min.js"> </script>
<script src="<?= base_url ?>/libs/sticky-kit/dist/sticky-kit.min.js"> </script>
<script src="<?= base_url ?>/libs/imagesloaded/imagesloaded.pkgd.min.js"> </script>
<script src="<?= base_url ?>/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js"> </script>
<script src="<?= base_url ?>/js/quick-website.js"> </script>

<script>
    feather.replace({
            width: "1em",
            height: "1em"
        })
</script>

<script src="<?= base_url ?>/js/slider.js"></script>

</html>

<?= Flasher::removeMessageOld() ?>
