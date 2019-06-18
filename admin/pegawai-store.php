<?php
include 'header.php';
?>

<form action="pegawai-store-proses.php" method="POST">
    <label for="">
        <h2>Input Data Pegawai</h2>
    </label>
    <div class="row form-group">
        <div class="col">
            <input type="text" class="form-control" placeholder="NIP" name="nip" required>
        </div>
        <div class="col">
            
        </div>
        <div class="col">
            <select class="form-control" name="jabatan">
                <option value="" selected="selected">Pilih Jabatan</option>
                <?php
                // query untuk menampilkan semua kategori dari tabel 
                $query = "SELECT * FROM jabatan";
                $hasil = mysqli_query($conn, $query);
                while ($data = mysqli_fetch_array($hasil)) {
                    echo "<option value='" . $data['kode_jabatan'] . "'>" . $data['nama_jabatan'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="col">
            <button type="submit" class="btn btn-success">+</button>
        </div>
    </div>
    <div class="row form-group">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nama Depan" name="nama_depan" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Nama Belakang" name="nama_belakang" required>
        </div>
    </div>
    <div class="form-group"><label>Jenis Kelamin</label></div>
    <div class="form-group">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jk" value="L">
            <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jk" value="P">
            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
        </div>
    </div>

    <div class="form-group">
        <textarea class="form-control" placeholder="Alamat" name="alamat" rows="3"></textarea>
    </div>
    <div class="form-group">
        <input type="number" class="form-control" placeholder="No. Telepon" name="no_tlp" required>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" placeholder="Email" name="email" required>
    </div>
    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Pendidikan" name="pendidikan" required>
    </div>
    <div class="form-group">
        <label>Tanggal Rekrut</label>
        <input type="date" class="form-control" placeholder="Tanggal Rekrut" name="tgl_rekrut" required>
    </div>
    <div class="form-group">
        <a href="barang.php"><button type="button" class="btn btn-secondary"><span class="fa fa-arrow-left"></span></button></a>
        <input type="submit" class="btn btn-primary" value="Submit">
    </div>
</form>

<?php
include 'footer.php';
?>