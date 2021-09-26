<?php 
//mengambil template header
include 'template/header.php';

?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login</p>

      <form action="proses_login.php" name="pesan" class="user" method="post" onsubmit="return validasi()">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username" id="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" id="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <a href="index.php" class="btn btn-primary btn-block">Sign In</a>
          </div>
          <div class="col-6">
            <a href="index.php" class="btn btn-warning btn-block">Halaman Utama</a>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
  <?php if(isset($_GET['pesan'])) { ?>
			<div class="error">
       <?php echo "<script>alert('Gagal Login!');</script>";?>
			</div>
		<?php } ?>
</div>
<!-- /.login-box -->

<!-- javascript form validation -->
<script>
  function validasi(){
var username=document.getElementById('Username').value;
var password=document.getElementById('Password').value;
if(username!='' && password!=''){
  return true;
}else{
  alert('Username dan Password tidak boleh kosong');
}
  }
</script>

<?php 

include 'template/footer.php';

?>
</body>
</html>
