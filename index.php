<?php

// session
session_start();

include 'template/header.php'; ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<nav class="navbar navbar-expand navbar-dark bg-dark" style="background-color:#181D33 !important;">
<div class="container">

  <div class="container font-weight-bold">
    <div class="navbar-nav mr-auto">
      <a target="_blank" class="nav-item nav-link" href="https://www.facebook.com/lsptd/" title="facebook"><i class="fab fa-facebook-f"></i></a>
        <a target="_blank" class="nav-item nav-link" href="https://www.instagram.com/lsp.td/" title="instagram"><i class="fab fa-instagram"></i></a>
        <a target="_blank" class="nav-item nav-link" href="https://www.youtube.com/channel/UCzzAznco5deIbDVZS4acb9w" title="youtube"><i class="fab fa-youtube"></i></a>
        <a class="nav-item nav-link lsp-bnsp-link" href="#" title="BNSP">BNSP-LSP-1565-ID</a>
      </div>
      <div class="navbar-nav ml-auto responsive">
        <a class="nav-item nav-link" href="login.php">Login</a>
        <a class="nav-item nav-link" href="registrasi.php">Registrasi</a>
      </div>
            </div>
          </div>
          </nav>
<!-- navbar -->
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
  <div class="container">

  <a class="navbar-brand" href="#">LSP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto responsive">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PROFIL
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="visi_misi.php">VISI & MISI</a>
          <a class="dropdown-item" href="mitra.php">MITRA KERJA</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SERTIFIKASI
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="skema.php">SKEMA SERTIFIKASI</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          INFORMASI
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="artikel.php">ARTIKEL</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="kontak.php">CONTACT</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
<!-- akhir navbar -->

<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4"><span>LSP</span><br><span>L</span>embaga <span>S</span>ertifikasi <span>P</span>rofesi</h1>
    </div>
  </div>
  <!-- akhir jumbotron -->

  <!-- info-panel -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10 info-panel">
        <div class="row">
          <div class="col-lg">
            <img src="img/employee.png" alt="" class="float-left">
            <div class="form-group">
              <h4>Skema</h4>
              <p>Pilih skema pelatihannya</p>
                <select class="form-control">
                  <option>Pilih Skema Sertifikasi</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
            </div>
          </div>
          <div class="col-lg">
            <img src="img/pin.jpg" alt="" class="float-left">
            <h4>Provinsi</h4>
            <p>Pilih lokasi anda</p>
            <select class="form-control">
                  <option>Pilih Skema Sertifikasi</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
          </div>
          <div class="col-lg">
            <img src="img/time.png" alt="" class="float-left">
            <h4>Jadwal</h4>
            <p>Pilih jadwalnya</p>
            <div class="form-group">
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- akhir info panel -->

<!-- sertifikasi -->
  <div class="container">
    <div class="row d-flex justify-content-center mb-2 mt-4 pt-3">
      <div class="col-md-8 pt-3 mt-4 mb-4">
        <h1 class="text-center mb-4">
          LEMBAGA SERTIFIKASI PROFESI
        </h1>
        <h4 class="text-center font-weight-bold mb-3">
          Mengapa Kami?
        </h4>
        <div class="text-center mb-4">
          
					Karena komitmen kami untuk meningkatkan kebertrimaan Sertifikat
					Kompetensi oleh industri baik di tingkat nasional maupun
					internasional.
				
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 text-center py-1">
        <div>
          <i class="fas fa-scroll"></i>
        </div>
        <div class="pl-3 pt-3">
          <h5 class="navbar-nav">
            <a href="" class="nav-link text-dark font-weight-bold">36 skema sertifikasi</a>
          </h5>
          <p>
            Skema / Profesi / Jabatan / Pekerjaan di bidang-bidang strategis sektor Teknologi Informasi dan Komunikasi.
          </p>
          <a href="" class="nav-link text-primary font-weight-bold">Jadwal sertifikasi</a>
        </div>
      </div>
      <div class="col-lg-4 text-center py-1">
        <div>
          <i class="fas fa-drafting-compass"></i>
        </div>
        <div class="pl-3 pt-3">
          <h5 class="navbar-nav">
            <a href="" class="nav-link text-dark font-weight-bold">300++ Link DUDI</a>
          </h5>
          <p>
            Skema / Profesi / Jabatan / Pekerjaan di bidang-bidang strategis sektor Teknologi Informasi dan Komunikasi.
          </p>
          <a href="" class="nav-link text-primary font-weight-bold">Jadwal sertifikasi</a>
        </div>
      </div>
      <div class="col-lg-4 text-center py-1">
        <div>
          <i class="fas fa-child"></i>
        </div>
        <div class="pl-3 pt-3">
          <h5 class="navbar-nav">
            <a href="" class="nav-link text-dark font-weight-bold">1000++ SDM Tersedia</a>
          </h5>
          <p>
            Skema / Profesi / Jabatan / Pekerjaan di bidang-bidang strategis sektor Teknologi Informasi dan Komunikasi.
          </p>
          <a href="" class="nav-link text-primary font-weight-bold">Jadwal sertifikasi</a>
        </div>
      </div>
    </div>
  </div>
<!-- akhir sertifikasi -->

<!-- daftar skema -->
  <div class="container py-4">
    <div class="row mb-4 pt-4">
      <div class="col text-center">
        <h2>Daftar Skema Sertifikasi</h2>
      </div>
    </div>
    <div class="row mb-4">
    <div class="col-sm-4">
      <div class="card">
  <img class="card-img-top" src="img/sertifikasi.jpg" height="248px">
  <div class="card-body">
    <h5 class="card-title"><b>Junior Web Developer</b></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="skema.php" class="btn btn-primary">Lihat Skema</a>
  </div>
</div>
    </div>
    <div class="col-sm-4">
      <div class="card">
  <img class="card-img-top" src="img/sertifikasi.jpg" height="248px">
  <div class="card-body">
    <h5 class="card-title"><b>Junior Data Scientist</b></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="skema.php" class="btn btn-primary">Lihat Skema</a>
  </div>
</div>
    </div>
    <div class="col-sm-4">
      <div class="card">
  <img class="card-img-top" src="img/sertifikasi.jpg" height="248px">
  <div class="card-body">
    <h5 class="card-title"><b> Big Data</b></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="skema.php" class="btn btn-primary">Lihat Skema</a>
  </div>
</div>
    </div>
    </div>
  </div>
<!-- akhir daftar skema -->
  

  <!-- bagian artikel -->
  <div class="container py-4">
    <div class="row mb-4 pt-4">
      <div class="col text-center">
        <h2>Artikel</h2>
      </div>
    </div>
    <div class="row mb-4">
    <div class="col-sm-4">
  <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/artikel.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><b>Sertifikasi Junior Web Developer</b></h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

  
</div>
    </div>
    <div class="col-sm-4">
       <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/artikel.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><b>Sertifikasi Multimedia Desainer</b></h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

  
</div>
    </div>
    <div class="col-sm-4">
      <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/artikel.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><b>Sertifikasi Digital Marketing</b></h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

  
</div>
    </div>
    </div>
  </div>
<!-- akhir bagian artikel -->

<!-- footer -->
<footer class="bg-light">
  <div class="container pt-4">
    <div class="row">
      <div class="col-md-6 col-lg-2 pt-3">
        <h5 class="text-info">Mitra LSP</h5>
        <hr class="bg-secondary">
        <div class="navbar-nav">
          <a href="" class="text-secondary nav-item nav-link">LSP Migas</a>
          <a href="" class="text-secondary nav-item nav-link">LSP Migas</a>
          <a href="" class="text-secondary nav-item nav-link">LSP Migas</a>
          <a href="" class="text-secondary nav-item nav-link">LSP Migas</a>
          <a href="" class="text-secondary nav-item nav-link">LSP Migas</a>
          <a href="" class="text-secondary nav-item nav-link">LSP Migas</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-2 pt-3">
        <h5 class="text-info">Link Popular</h5>
        <hr class="bg-secondary">
        <div class="navbar-nav">
          <a href="" class="text-secondary nav-item nav-link">LSP Migas</a>
          <a href="" class="text-secondary nav-item nav-link">LSP Migas</a>
          <a href="" class="text-secondary nav-item nav-link">LSP Migas</a>
          <a href="" class="text-secondary nav-item nav-link">LSP Migas</a>
          <a href="" class="text-secondary nav-item nav-link">LSP Migas</a>
          <a href="" class="text-secondary nav-item nav-link">LSP Migas</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 pt-3">
        <h5 class="text-info">Kontak</h5>
        <hr class="bg-secondary">
        <div>
          <p class="d-flex flex-row text-secondary">
            <span class="d-flex align-items-center h4">
              <i class="fas fa-map-marked-alt"></i>
            </span>
            <span class="pl-3">
              Jakarta : Pulogebang Indah Blok J11 No 34, Jakarta Timur, 021-22859837
            </span>
          </p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 pt-3">
        <h5 class="text-info">Pesan</h5>
        <hr class="bg-secondary">
        <!-- email -->
        <form action="proses_pesan.php" method="POST">
          <div class="row">
            <div class="col-sm-6">
               <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control">
          </div>
            </div>
            <div class="col-sm-6">
               <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control">
          </div>
            </div>
            <div class="col-sm-12">
               <div class="form-group">
            <label for="">Pesan</label>
            <textarea type="text" name="pesan" class="form-control"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
          </div>
        </form>
      </div>
      </div>
      <hr class="bg-secondary">
      <div class="row">
        <div class="col-md-6">
          <p class="text-secondary">
            © Copyright 2021 - 
            <a href="">Indonesia</a>
          </p>
        </div>
        <div class="col-md-6 text-md-right mb-2">
          <p class="text-secondary">
            <a href="" target="_blan"></a>
            <img src="img/playstore.png" width="100px">
          </p>
        </div>
      </div>
  </div>
  
</footer>
<!-- akhir footer -->

</div>
<!-- ./wrapper -->
<?php include 'template/footer.php'; ?>
</body>
</html>
