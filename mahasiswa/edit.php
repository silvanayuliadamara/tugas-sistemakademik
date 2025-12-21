    <h1>Edit Data Mahasiswa</h1>
    <?php 
    require __DIR__ . '/../koneksi.php'; //memasukkan file koneksi.php agar bisa menggunakan variabel $koneksi
    $nim = $_GET['key'];
    $edit =$koneksi->query("SELECT * FROM mahasiswa WHERE nim= '$nim'");
    $data =$edit->fetch_assoc();
    ?>
   

    <form action="mahasiswa/proses.php" method="POST"> <!--tidak ditulis default action halaman nya sendiri, kalau method defaultnya get => di gabungkan ke url--> 
        <input type="text" name="id" value="<?= $data['nim'] ?>" hidden>
        <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name ="nim" value="<?= $data['nim'] ?>" required>
        </div>

        <div class="mb-3">
        <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name ="nama_mhs" value="<?= $data['nama_mhs'] ?>" required>
        </div>

        <div class="mb-3">
        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name ="tgl_lahir" value="<?= $data['tgl_lahir'] ?>" required>
        </div>

        <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name = "alamat" id="exampleFormControlTextarea1" rows="3"><?= $data['alamat'] ?></textarea>
        </div>
        
     <div class="mb-3">
    <label class="form-label">Program Studi</label>
    <select name="program_studi_id" class="form-control" required>
        <option value="">-- Pilih Program Studi --</option>

        <?php
        $prodi = $koneksi->query("SELECT * FROM program_studi");
        while ($row = $prodi->fetch_assoc()):
            $selected = ($edit && $row['id'] == ($data['program_studi_id'] ?? '')) ? 'selected' : '';
        ?>
            <option value="<?= $row['id']; ?>" <?= $selected; ?>>
                <?= $row['nama_prodi']; ?>
            </option>
        <?php endwhile; ?>
    </select>
</div>
        <div class="mb-3">
            <input type="submit" name ="update" class="btn btn-primary" value="Submit" > 
             <a href="mahasiswa/list.php" class= "btn btn-secondary">List Data Mahasiswa</a>

        </div>
    </form>
  