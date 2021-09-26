<?php 
// mengambil template heder
include 'template/header.php';

?>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href=""><b>Register</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">

      <form action="registrasi_peserta.php" method="post">
      <label for="">Skema</label>
        <div class="input-group mb-3">
           <select class="form-control" name="id_skema">
              <option value="">Pilih Skema</option>
              <option value="">Junior Web Developer</option>
              <option value="">Junior Grafis Desain</option>
            </select>
        </div>
      <label for="">Jadwal</label>
        <div class="input-group mb-3">
          <input type="date" name="jadwal" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
      <label for="">Nama</label>
        <div class="input-group mb-3">
          <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
      <label for="">NIK</label>
        <div class="input-group mb-3">
          <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
      <label for="">Jenis Kelamin</label>
        <div class="input-group mb-3">
          <input type="text" name="jk" class="form-control" placeholder="Masukkan Jenis Kelamin">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
      <label for="">Tempat Tanggal Lahir</label>
        <div class="input-group mb-3">
          <input type="text" name="ttl" class="form-control" placeholder="Masukkan TTL">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
      <label for="">Alamat</label>
        <div class="input-group mb-3">
          <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
      <label for="">No HP</label>
        <div class="input-group mb-3">
          <input type="text" name="nohp" class="form-control" placeholder="Masukkan No HP">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
      <label for="">Email</label>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
      <label for="">Asal Sekolah /Perguruan Tinggi</label>
        <div class="input-group mb-3">
          <input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
      <label for="">Username</label>
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
      <label for="">Password</label>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <a  href="index.php" class="btn btn-primary btn-block">Register</a>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="login.php" class="text-center">Sudah punya akun Login</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<?php 

include 'template/footer.php';

?>