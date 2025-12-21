
    <h1 class="mb-4">Input Progam Studi</h1>
    <form action="proses.php" method="POST"> <!--tidak ditulis default action halaman nya sendiri, kalau method defaultnya get => di gabungkan ke url--> 
        <div class="mb-3">
        <label for="id" class="form-label">id</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name ="id" required>
        </div>

        <div class="mb-3">
        <label for="nama_prodi" class="form-label">Nama Prodi</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name ="nama_prodi" required>
        </div>

        <div class="mb-3">
        <label for="jenjang" class="form-label">Jenjang</label>
        <input type="" class="form-control" id="exampleFormControlInput1" name ="tgl_lahir" required>
        </div>

        
        <div class="mb-3">
        <label for="akreditasi" class="form-label">Akreditasi</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name ="akreditasi" required>
        </div>



        <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name = "alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="mt-4 mb-3">
            <input type="submit" name ="submit" class="btn btn-primary" value="Submit" > 
             <a href="index.php?p=datamahasiswa" class= "btn btn-secondary">List Data Mahasiswa</a>

        </div>
    </form>
   