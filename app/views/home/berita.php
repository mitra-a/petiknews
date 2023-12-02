<div class="mt-4">
	<div class="container">
        <img class="card-img" src="<?= base_url ?>/<?= $data['berita']['gambar'] ?>" style="height: 600px; object-fit: cover">

		<div class="row justify-content-center mt-n10">
			<div class="col-xl-9 col-lg-10">
				<div class="card position-relative zindex-100">
					<div class="card-body p-md-5">
						<div class="text-center">
							<a href="#" class="badge badge-primary badge-pill"><?= $data['berita']['kategori'] ?></a>
							<h1 class="h2 lh-150 mt-3 mb-0"><?= $data['berita']['judul'] ?></h1>
						</div>

						<div class="row align-items-center mt-5 pt-5 delimiter-top">
							<div class="col mb-3 mb-lg-0">
								<div class="media align-items-center">
									<div class="media-body">
										<span class="d-block h6 mb-0"><?= $data['berita']['nama'] ?></span>
										<span class="text-sm text-muted">Published on <?= date_format(date_create($data['berita']['tanggal']), 'F d, Y') ?></span>
									</div>
								</div>
							</div>
							<div class="col-auto">
								<ul class="list-inline mb-0">
									<li class="list-inline-item">
										<a href="#" class="text-muted">
											<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle mr-1 text-muted">
												<path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
											</svg> <?= count($data['komentar']) ?> </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

                <article>
                    <?= $data['berita']['konten'] ?>
                </article>
                
                <div class="row align-items-center mt-7 py-4 border-top border-bottom">
                    <div class="col mb-3 mb-lg-0">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <span class="d-block h6 mb-0"><?= $data['berita']['nama'] ?></span>
                                <span class="text-sm text-muted">Published on <?= date_format(date_create($data['berita']['tanggal']), 'F d, Y') ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="#" class="text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle mr-1 text-muted">
                                        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                                    </svg> <?= count($data['komentar']) ?> </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mt-5">
                    <h6 class="mb-4">Komentar</h6>
                    
                    <?php foreach($data['komentar'] as $item) { ?>
                        <div class="media media-comment">
                            <div class="media-body">
                                <div class="media-comment-bubble left-top">
                                    <h6 class="mt-0"><?= $item['nama'] ?></h6>
                                    <p class="text-sm lh-160"><?= $item['komentar'] ?></p>
                                    <div class="icon-actions">
                                        <span>
                                            <i class="fas fa-clock mr-2"></i>
                                            <?= date_format(date_create($data['berita']['tanggal']), 'Y F d') ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="media media-comment align-items-center">
                        <div class="media-body">
                            <form class="rounded-lg border" action="<?= base_url ?>/komentar/<?= $data['berita']['id'] ?>" method="POST">
                                <div class="input-group input-group-lg input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text border-0 pr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control border-0 px-1" aria-label="Find something" name="komentar" placeholder="Tambahkan komentar baru...">
                                        <div class="input-group-append">
                                            <?php if(isset($_SESSION['auth']['id'])){ ?>
                                                <span class="input-group-text border-0 py-0 pl-2 pr-2">
                                                    <button type="submit" class="btn btn-sm btn-primary">Post</button>
                                                </span>
                                            <?php } else { ?>
                                                <span class="input-group-text border-0 py-0 pl-2 pr-2">
                                                    <a href="<?= base_url ?>/login" class="btn btn-sm btn-primary">Login disini!</a>
                                                </span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>

<section class="slice">
    <div class="shape-container shape-position-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="2560px" height="100px" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="injected-svg svg-inject fill-section-secondary">
            <polygon id="Path" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</section>

<section class="slice slice-lg bg-section-secondary">
	<div class="container">
		<div class="row align-items-center mb-5">
			<div class="col-12 col-md">
				<h3 class="h4 mb-0">Keep reading</h3>
				<p class="mb-0 text-muted">Lihat beberapa berita rekomendasi dari kami</p>
			</div>
			<div class="col-12 col-md-auto">
				<a href="<?= base_url ?>/<?= strtolower($data['berita']['kategori']) ?>" class="btn btn-sm btn-neutral d-none d-md-inline">View all</a>
			</div>
		</div>
		<div class="row justify-content-center">
            <?php foreach($data['rekomendasi'] as $item) { ?>
                <div class="col-xl-4 col-md-6">
                    <div class="card hover-translate-y-n3 hover-shadow-lg overflow-hidden">
                        <div class="position-relative overflow-hidden" style="height:12.5rem">
                            <a href="" class="d-block">
                                <img alt="Image placeholder" src="<?= base_url ?>/<?= $item['gambar'] ?>" class="card-img-top">
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