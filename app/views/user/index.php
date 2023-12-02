<div class="container mt-4">
    <div class="row align-items-center mb-4">
      <div class="col">
        <h1 class="h4 mb-0">Beranda</h1>
      </div>
    </div>
    <div class="row mx-n2">
        
      <div class="col-lg-3 col-sm-6 px-2">
        <div class="card">
          <div class="card-body text-center">
            <div class="mb-3">
                <h1 class="text-primary font-weight-bold"><?= $data['berita']['jumlah'] ?></h1>
            </div>
            <h5 class="h3 font-weight-bolder mb-1">Berita</h5><span class="d-block text-sm text-muted">Jumlah Berita <br> dalam Database</span>
          </div>
        </div>
      </div>
        
      <div class="col-lg-3 col-sm-6 px-2">
        <div class="card">
          <div class="card-body text-center">
            <div class="mb-3">
                <h1 class="text-primary font-weight-bold"><?= $data['penulis']['jumlah'] ?></h1>
            </div>
            <h5 class="h3 font-weight-bolder mb-1">Penulis</h5><span class="d-block text-sm text-muted">Jumlah total Penulis <br> dalam Database</span>
          </div>
        </div>
      </div>
        
      <div class="col-lg-3 col-sm-6 px-2">
        <div class="card">
          <div class="card-body text-center">
            <div class="mb-3">
                <h1 class="text-primary font-weight-bold"><?= $data['user']['jumlah'] ?></h1>
            </div>
            <h5 class="h3 font-weight-bolder mb-1">User</h5><span class="d-block text-sm text-muted">Jumlah user yang <br> register dalam Database</span>
          </div>
        </div>
      </div>
        
      <div class="col-lg-3 col-sm-6 px-2">
        <div class="card">
          <div class="card-body text-center">
            <div class="mb-3">
                <h1 class="text-primary font-weight-bold"><?= $data['visit']['jumlah'] ?></h1>
            </div>
            <h5 class="h3 font-weight-bolder mb-1">Visit</h5><span class="d-block text-sm text-muted">Jumlah keseluruhan <br> pengunjung Petik News</span>
          </div>
        </div>
      </div>
      
    </div>
  </div>