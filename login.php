<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container min-vh-100 d-flex justify-content-center align-items-center">

      <div class="col-lg-4 col-md-6">

        <div class="card shadow-sm border-0 rounded-4">
          <div class="card-body p-4">

            <h4 class="text-center mb-4">Login</h4>
              <?php
        if (isset($_GET['success'])) {
            echo '<div class="alert alert-success text-center">
                    Registrasi berhasil, silakan login.
                  </div>';
        }
        ?>

            <form action="" method="POST">

              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
                <div class="form-text">Masukkan email yang terdaftar.</div>
              </div>

              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
              </div>

              <button type="submit" class="btn btn-primary w-100">
                Login
              </button>

            </form>

          <div class="text-center mt-3">
            Belum punya akun? <a href="register.php">Register</a>
          </div>


            <?php
              if(isset($_POST['email'])){
                  $email = $_POST['email'];
                  $pass  = md5($_POST['password']);

                  require 'koneksi.php';

                  $ceklogin = $koneksi->query(
                      "SELECT * FROM pengguna WHERE email ='$email' AND password='$pass'"
                  );

                  if($ceklogin->num_rows == 1){
                      $data = $ceklogin->fetch_assoc();
                      session_start();

                      $_SESSION['login'] = TRUE;
                      $_SESSION['email'] = $email;
                      $_SESSION['nama_lengkap'] = $data['nama_lengkap'];

                      header("Location: index.php");
                  } else {
                      echo '<div class="alert alert-danger mt-3">Email atau password salah.</div>';
                  }
              }
            ?>

          </div>
        </div>

      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
