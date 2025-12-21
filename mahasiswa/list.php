  <h1 class="mb-4">List Data Mahasiswa</h1>
  <a href="index.php?p=create" class= "btn btn-primary mb-4">Input Data Mahasiswa</a>



<table class="table table-bordered table-striped>">
    
  <thead class="table-primary">
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Tanggal lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Program Studi</th>
      <th scope="col">Aksi</th>


    </tr>
  </thead>
  <tbody>
    <?php 
        require __DIR__ . '/../koneksi.php';
        $tampil = $koneksi->query("SELECT m.*, p.nama_prodi FROM mahasiswa m JOIN program_studi p ON m.program_studi_id = p.id");
        $no = 1;
        while($data = mysqli_fetch_assoc($tampil)) {
           // $time = $data['date_centered'];

             //$data=array();
       // while($row=$tampil->fetch_assoc()){
           // $data[]=$row;
        //}
       // $data =$tampil->fetch_all();
       // var_dump($data);
        //die;
        //foreach($tampil as $row) :
          //$time = $row['date_centered'];
    ?>
    <tr>
      <th scope="row"><?=$no++ ?></th>
      <td><?= $data['nim']; ?></td>
      <td><?= $data['nama_mhs']; ?></td>
      <td><?= $data['tgl_lahir']; ?></td>
      <td><?= $data['alamat']; ?></td>
      <!-- <td><?= date('d M Y H:i:s', strtotime($time)); ?></td> --> 
      <td><?= $data['nama_prodi']; ?></td>

      <td>
        <a href="index.php?key=<?=$data['nim']?>&p=edit" class = "btn btn-warning btn-sm">Edit</a>
        <a  onclick="return confirm('Apakah Anda Yakin?')" href="mahasiswa/proses.php?nim=<?= $data['nim']?>&aksi=hapus" class="btn btn-danger btn-sm">Hapus</a>
      </td>
    </tr>
    
    <?php 
        }
    ?>
  </tbody>
</table>