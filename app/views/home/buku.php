<section class="slice slice-lg pt-17 pb-0 bg-cover bg-size--cover" style="background-image:url('https://preview.webpixels.io/quick-website-ui-kit/assets/img/theme/light/blog-hero-1.jpg'); height: 600px">
	<div class="shape-container shape-position-bottom">
		<svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100" xml:space="preserve" class="">
			<polygon points="2560 0 2560 100 0 100"></polygon>
		</svg>
	</div>
</section>

<div class="container" style="margin-top: -17rem">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card mb-n5 position-relative zindex-100">
                <div class="card-body p-md-5">
                    <div class="text-center w-75 mx-auto">
                        <a href="#" class="badge badge-success badge-pill">Buku Tamu</a>
                        <h1 class="h2 lh-150 mt-3 mb-0">Masukkan data diri pada <b>form isian</b> tujuan kunjungan <b></b>.</h1>
                    </div>
                    <div class="row align-items-center mt-5 pt-5 delimiter-top">
                        <form class="card-body p-5" method="POST" action="<?= base_url ?>/bukutamu">
                            <div class="form-group">
                                <label>Nama</label>
                                <input name="nama" type="text" class="form-control">
                            </div>
                
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="email" class="form-control">
                            </div>
                
                            <div class="form-group">
                                <label>Tujuan Kunjungan</label>
                                <textarea name="tujuan" class="form-control" rows="10"></textarea>
                            </div>
                            
                            <div class="d-flex mt-5">
                                <button type="submit" class="btn btn-primary ml-auto">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php if(!empty($data['buku'])){ ?>
        <div class="col-lg-5 zindex-100">
            <?php foreach($data['buku'] as $item){ ?>
                <blockquote class="blockquote blockquote-card mb-3 py-5 px-5 rounded-right bg-soft-primary">
                    <h5 class="h3 font-weight-700">Tujuan Kunjungan</h5>
                    <p class="lead"><?= $item['tujuan'] ?></p>
                    <footer class="blockquote-footer">
                        <cite class="font-weight-600" title="Source Title"><?= $item['nama'] ?>, </cite>
                        <?= date_format(date_create($item['tanggal']), 'd F Y') ?>
                    </footer>
                </blockquote>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</div>