<?php
include 'header.php';
?>

<form action="barang-store-proses.php" method="POST">
    <label for="">
        <h2>Input Data Barang</h2>
    </label>
    <div class="row form-group">
        <div class="col">
            <input type="text" class="form-control" placeholder="Kode Barang" name="kode" required>
        </div>
        <div class="col">
            
        </div>
        <div class="col">
            <select class="form-control" name="kategori">
                <option value="" selected="selected">Pilih Kategori</option>
                <?php
                // query untuk menampilkan semua kategori dari tabel 
                $query = "SELECT * FROM kategori";
                $hasil = mysqli_query($conn, $query);
                while ($data = mysqli_fetch_array($hasil)) {
                    echo "<option value='" . $data['kode_kategori'] . "'>" . $data['nama_kategori'] . "</option>";
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
            <input type="text" class="form-control" placeholder="Nama Barang" name="nama" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Satuan" name="satuan" required>
        </div>
        <div class="col">
            <input type="number" class="form-control" placeholder="Stok Barang" name="stok" required>
        </div>
    </div>
    <div class="form-group">
        <input type="number" class="form-control" placeholder="harga_beli" name="hbeli" required>
    </div>
    <div class="form-group">
        <input type="number" class="form-control" placeholder="harga_jual" name="hjual" required>
    </div>
    <a href="barang.php"><button type="button" class="btn btn-secondary"><span class="fa fa-arrow-left"></span></button></a>
    <input type="submit" class="btn btn-primary" value="Submit">
</form>

<?php
include 'footer.php';
?>