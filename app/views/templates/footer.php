    </div>

    <footer class="position-relative mt-auto" id="footer-main">
        <div class="footer pt-lg-7 footer-dark bg-dark">
          <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
            <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100" xml:space="preserve" class="">
              <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
          </div>

          <div class="container pt-4">
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="row align-items-center">
                  <div class="col-lg-7">
                    <h3 class="text-secondary mb-2">Terima Kasih telah berkunjung</h3>
                    <p class="lead mb-0 text-white opacity-8">Berikan kami kritik dan saran untuk membuat website ini lebih baik lagi.</p>
                  </div>
                  <div class="col-lg-5 text-lg-right mt-4 mt-lg-0">
                    <a href="<?= base_url ?>/bukutamu" class="btn btn-white btn-icon my-2" target="_blank">
                      <span class="btn-inner--icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book text-primary">
                          <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                          <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                      </span>
                      <span class="btn-inner--text">Buku Tamu</span>
                    </a>
                    <a href="<?= base_url ?>/kritik" class="btn btn-primary my-2 ml-0 ml-sm-3" target="_blank">Kiritik dan Saran</a>
                  </div>
                </div>
              </div>
            </div>

            <hr class="divider divider-fade divider-dark my-5">

            <div class="row">
              <?php $footer = Visit::get(); ?>

              <div class="col-lg-4 mb-5 mb-lg-0">
                <a href="#"> <img alt="" src="<?= base_url ?>/logo/logo-text-white.png" height="150px" id="footer-logo"></a>
              </div>
              <div class="col-lg-4 mb-5 mb-lg-0">
                <p class="mt-4 text-sm opacity-8 pr-lg-4">
                    <b>Petik news</b> merupakan portal web yang berisi berita dan artikel secara daring. terdapat berbagai macam informasi yang disajikan seperti olahraga, kesehatan, politik dan lain-lain.
                </p>
                <ul class="nav mt-4">
                  <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i> Facebook</a></li>
                </ul>
              </div>
              <div class="col-lg-4 mb-5 mb-lg-0">
                <h6 class="heading mb-3">Visited</h6>
                          <div>
                    <span> Hari Ini </span>
                    <span class="text-white counter float-right counting-finished" data-from="0" data-to="122" data-speed="1500" data-refresh-interval="100"><b><?= $footer["hari"]["jumlah"] ?></b></span>
                </div>
                <div>
                    <span> Bulan Ini </span>
                    <span class="text-white counter float-right counting-finished" data-from="0" data-to="11469" data-speed="1500" data-refresh-interval="100"><b><?= $footer["bulan"]["jumlah"] ?></b></span>
                </div>
                <div>
                    <span> Tahun ini </span>
                    <span class="text-white counter float-right counting-finished" data-from="0" data-to="314102" data-speed="1500" data-refresh-interval="100"><b><?= $footer["tahun"]["jumlah"] ?></b></span>
                </div>
                <div>
                    <span> Semuanya </span>
                    <span class="text-white counter float-right counting-finished" data-from="0" data-to="314102" data-speed="1500" data-refresh-interval="100"><b><?= $footer["semua"]["jumlah"] ?></b></span>
                </div>
              </div>
            </div>

            <hr class="divider divider-fade divider-dark my-4">

            <div class="row align-items-center justify-content-md-between pb-4">
              <div class="col-md-6">
                <div class="copyright text-sm font-weight-bold text-center text-md-left">© 2022 Petik News.</div>
              </div>
              <div class="col-md-6">
                <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                  <li class="nav-item"><a href="https://www.google.co.id/maps/" target="_blank" class="nav-link">Jl. Jalan Men Km.11 </a></li>
                  <li class="nav-item"><span class="nav-link">Telp: +62852-4223-6440</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </footer>
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