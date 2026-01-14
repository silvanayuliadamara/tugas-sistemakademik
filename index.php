<?php
// session = fungsi di php untuk menyimpan data sementara di server tipe datany array menyimpan dATA BOOLEAN, dia hilang jika dihapus secara manual atau meng close browser ny | cookies diismpan di browser user bisa diatur masa aktifnya ada batasny
session_start();
if(!isset($_SESSION['login'])) {
 header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container my-4">
    	<img src="images/logo-ti-pnp-05-1.png" alt="Logo TI" height="30">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" href='index.php?p=create'>+Data Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" href='index.php?p=tambah'>+Program Studi</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active text-white" href="index.php?p=profil">
            <i class="bi bi-person-circle"></i>
            <?= $_SESSION['nama_lengkap'] ?>
          </a>
        </li>
         <li class="nav-item">
         <a class="nav-link fw-semibold btn btn-danger text-white active" href="#" onclick="confirmLogout()">Logout</a>

        </li>
      </ul>
    </div>
  </div>
</nav>


    <div class="container my-4">
    <?php
       $page = isset($_GET['p']) ? $_GET['p'] :'home';
       if ($page == 'home') include 'home.php';
       if ($page == 'datamahasiswa') include 'mahasiswa/list.php';
       if ($page == 'create') include 'mahasiswa/create.php';
       if ($page == 'edit') include 'mahasiswa/edit.php';
       if ($page == 'programstudi') include 'programstudi/list.php';
       if ($page == 'tambah') include 'programstudi/create.php';
       if ($page == 'ubah') include 'programstudi/edit.php';
       if ($page == 'profil') include 'editprofil.php';

       
       
       
    ?>
    </div>
    
    <script>
    function confirmLogout() {
      if (confirm("Apakah Anda yakin ingin logout?")) {
          window.location.href = "logout.php";
      }
    }
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>