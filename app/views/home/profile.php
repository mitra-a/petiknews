<section class="slice pt-5 pb-7">
    <div class="container">
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="avatar avatar-xl rounded-circle rounded border">
                                    <i class="fa fa-user text-dark h2 mb-0"></i>
                                </div>
                            </div>
                            <div class="col ml-n3 ml-md-n2">
                                <h2 class="mb-0"><?= $data['user']['nama'] ?></h2>
                                <span class="text-muted d-block"><?= ucfirst($data['user']['role']) ?></span>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <?= Flasher::MessageValidate() ?>
                            <ul class="nav nav-tabs overflow-x" id="myTabProfile" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button style="background-color: transparent" class="nav-link active" id="profile-tab" data-toggle="tab" data-target="#profile-pane" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button style="background-color: transparent" class="nav-link" id="edit-tab" data-toggle="tab" data-target="#edit-pane" type="button" role="tab" aria-controls="edit" aria-selected="false">Edit</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="card card-fluid mt-4">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="profile-pane" role="tabpanel" >
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-sm mb-0">
                                    <i class="fas fa-envelope mr-2"></i>Email
                                </h6>
                            </div>
                            <div class="col-auto">
                                <span class="text-sm"><?= $data['user']['email'] ?></span>
                            </div>
                        </div>
                        <hr class="my-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-sm mb-3">
                                    Deskripsi Singkat :
                                </h6>

                                <span class="text-sm"><?= $data['user']['deskripsi'] ?? 'Tidak ada deskripsi' ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <form class="tab-pane fade" id="edit-pane" role="tabpanel" aria-labelledby="edit-tab" method="POST" action="<?= base_url ?>/profile">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input name="nama" type="text" class="form-control" value="<?= $data['user']['nama'] ?>">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" readonly type="email" class="form-control" value="<?= $data['user']['email'] ?>">
                        </div>

                        <div class="form-group">
                            <label>Password Lama</label>
                            <input name="password" type="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Password Baru</label>
                            <input name="password_baru" type="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="5"><?= $data['user']['deskripsi'] ?></textarea>
                        </div>

                        <div class="d-flex mt-4">
                            <button type="submit" class="btn btn-primary ml-auto">Edit Profile</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <?= Flasher::removeMessageOld() ?>
</section>