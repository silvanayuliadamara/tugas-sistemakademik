
   <h3 class="mb-4">
    <?= isset($_GET['nim']) ? 'Edit Data Mahasiswa' : 'Input Data Mahasiswa'; ?>
</h3>

<?php
include __DIR__ . "/../koneksi.php";

$edit = false;
$data = [];

if (isset($_GET['nim']) && !empty($_GET['nim'])) {
    $edit = true;
    $nim = intval($_GET['nim']);

    $stmt = $koneksi->prepare("SELECT * FROM mahasiswa WHERE nim = ?");
    $stmt->bind_param("i", $nim);
    $stmt->execute();
    $data = $stmt->get_result()->fetch_assoc();
}
?>
    <form action="mahasiswa/proses.php" method="POST"> <!--tidak ditulis default action halaman nya sendiri, kalau method defaultnya get => di gabungkan ke url--> 
        <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name ="nim" required>
        </div>

        <div class="mb-3">
        <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name ="nama_mhs" required>
        </div>

        <div class="mb-3">
        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name ="tgl_lahir" required>
        </div>


        <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name = "alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
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

 <div class="mt-4 mb-3">
            <input type="submit" name ="submit" class="btn btn-primary" value="Submit" > 
             <a href="index.php?p=datamahasiswa" class= "btn btn-secondary">List Data Mahasiswa</a>

        </div>


    </form>
   