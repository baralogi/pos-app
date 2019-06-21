<?php
include 'header.php';
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="barang.php">Barang</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Barang</li>
    </ol>
</nav>

<h3>Tambah Barang</h3>
<div class="card">
    <div class="card-body">
        <form action="barang-store-proses.php" method="POST">
        <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                            echo "<div class='alert alert-danger' role='alert'></span>  Kode Barang Sudah Terdaftar !!</div>";
                        }
                    }
                    ?> 
            <div class="row form-group">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Kode Barang" name="kode" required>
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
                <input type="number" class="form-control" placeholder="Harga Beli" name="hbeli" required>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Harga Jual" name="hjual" required>
            </div>
            <a href="barang.php"><button type="button" class="btn btn-secondary"><span class="fa fa-arrow-left"></span></button></a>
            <input type="submit" class="btn btn-primary" value="Save">
        </form>
    </div>
</div>
<?php
include 'footer.php';
?>