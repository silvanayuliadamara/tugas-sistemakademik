<?php
// include  jika file yang dimasukkan eror kode lain ttp dijalankan | require jika file yang dimasukkan eror kode lain nya juga eror| 
//include_once yg dipanggil yg pertama | require_once

require __DIR__ . '/../koneksi.php'; //memasukkan file koneksi.php agar bisa menggunakan variabel $koneksi
//blok kode untuk menyimpan data
if(isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama_mhs = $_POST['nama_mhs'];  
    $tgl_lahir = $_POST['tgl_lahir']; 
    $alamat = $_POST['alamat'];
    $program_studi_id = $_POST['program_studi_id'];
  //fungsi date untuk mengambil tgl_lahir sekarang dengan format tahun-bulan-tgl_lahir

   // CEK APAKAH NIM SUDAH ADA
    $cek = $koneksi->query("SELECT * FROM mahasiswa WHERE nim='$nim'");
    
    if($cek->num_rows > 0){
        // Jika ada, beri peringatan dan hentikan proses
        echo "
            <script>
                alert('NIM sudah terdaftar! Silakan gunakan NIM lain.');
                window.location.href = '../index.php?p=create';
            </script>
        ";
        exit;
    }

    $sql ="INSERT INTO mahasiswa(nim,nama_mhs,tgl_lahir,alamat,program_studi_id)
            VALUES ('$nim','$nama_mhs','$tgl_lahir','$alamat','$program_studi_id')";
    $query = $koneksi->query($sql); //eksekusi perintah sql(query))
    if($query){
        header('Location: ../index.php?p=datamahasiswa'); //mengalihkan ke halaman list.php
    }
    else {
        echo "Gagal menyimpan data: " . $koneksi->error;
    }    
}
//blok kode untuk update data

if(isset($_POST['update'])){
    $nim = $_POST['nim'];
    $nama_mhs = $_POST['nama_mhs'];  
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
     $program_studi_id = $_POST['program_studi_id'];
    
    

    $sql ="UPDATE mahasiswa SET nama_mhs='$nama_mhs',
            tgl_lahir='$tgl_lahir',
            alamat='$alamat',
            program_studi_id='$program_studi_id'
            WHERE nim= '$nim'";
    $query = $koneksi->query($sql); //eksekusi perintah sql(query))
    if($query){
        header('Location: ../index.php?p=datamahasiswa'); //mengalihkan ke halaman list.php
    }
    else {
        echo "Gagal menyimpan data";
    }    
}


//blok kode untuk menghapus data
if (isset($_GET['aksi']) == 'hapus'){
    $nim = $_GET['nim'];
    $query = $koneksi->query("DELETE FROM mahasiswa WHERE nim= '$nim'");
    if($query){
        header('Location: ../index.php?p=datamahasiswa'); //mengalihkan ke halaman list.php
    }
    else {
        echo "Gagal mmenghapus data";
    }    
}
?> 