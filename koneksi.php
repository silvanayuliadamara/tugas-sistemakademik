<?php
    //$db=mysqli_connect('localhost','root','','db_bukutamu');  //fungsi yang memiliki 4 parameter(host,user,password,nama database) prosudural
$host ="localhost";
$user ="root";
$password ="";
$db ="db_akademik";

$koneksi = new Mysqli($host, $user, $password, $db); //cara object oriente, membuka gerbang koneksi ke mysql database
if($koneksi->connect_error) {
    echo "Koneksi  gagal!";

}
?>