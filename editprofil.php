<?php
if(!isset($_SESSION['login'])){
  header("Location: login.php");
  exit;
}

require 'koneksi.php';

$email = $_SESSION['email'];
$data = $koneksi->query(
  "SELECT * FROM pengguna WHERE email='$email'"
)->fetch_assoc();
?>

<h1 class="mb-4">Edit Profil</h1>

<form method="POST">

  <div class="mb-3">
    <label>Email</label>
    <input type="email" class="form-control"
           value="<?= $data['email'] ?>" readonly>
  </div>

  <div class="mb-3">
    <label>Nama Lengkap</label>
    <input type="text" name="nama_lengkap"
           class="form-control"
           value="<?= $data['nama_lengkap'] ?>"
           required>
  </div>

  <div class="mb-3">
    <label>Password Baru</label>
    <input type="password" name="password"
           class="form-control"
           placeholder="Kosongkan jika tidak diubah">
   
  </div>

  <div class="mb-3">
    <label>Konfirmasi Password</label>
    <input type="password" name="password_konfirmasi"
           class="form-control"
           placeholder="Ulangi password baru">
  </div>

  <button class="btn btn-primary">
    Simpan Perubahan
  </button>

</form>

<?php
if(isset($_POST['nama_lengkap'])){

  $nama = $_POST['nama_lengkap'];
  $password = $_POST['password'];
  $konfirmasi = $_POST['password_konfirmasi'];

  
  if(empty($nama)){
    echo "<div class='alert alert-danger mt-3'>
            Nama tidak boleh kosong
          </div>";
    exit;
  }


  if(!empty($password)){
    if($password != $konfirmasi){
      echo "<div class='alert alert-danger mt-3'>
              Konfirmasi password tidak cocok
            </div>";
      exit;
    }

    $pass = md5($password);
    $koneksi->query("
      UPDATE pengguna 
      SET nama_lengkap='$nama', password='$pass'
      WHERE email='$email'
    ");

  } else {
   
    $koneksi->query("
      UPDATE pengguna 
      SET nama_lengkap='$nama'
      WHERE email='$email'
    ");
  }

 
  $_SESSION['nama_lengkap'] = $nama;

  header("Location: index.php");
}
?>
