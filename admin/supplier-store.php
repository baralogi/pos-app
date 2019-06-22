<?php
include 'header.php';
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="barang.php">Supplier</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Supplier</li>
    </ol>
</nav>

<h3>Tambah Data Supplier</h3>
<div class="card">
    <div class="card-body">
        <form action="supplier-store-proses.php" method="POST">
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "<div class='alert alert-danger' role='alert'></span>  Kode Supplier Sudah Terdaftar !!</div>";
                }
            }
            ?>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Kode Supplier" name="kode" required> 
            </div>
            <div class="row form-group">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nama Supplier" name="nama" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nama Perusahaan" name="perusahaan" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col">
                    <input type="text" class="form-control" placeholder="alamat" name="alamat" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="kota" name="kota" required>
                </div>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="No. Telepon" name="no_tlp" required>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="No. Handphone" name="no_hp" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="3" placeholder="Keterangan" name="ket"></textarea>
            </div>
            <a href="barang.php"><button type="button" class="btn btn-secondary"><span class="fa fa-arrow-left"></span></button></a>
            <input type="submit" class="btn btn-primary" value="Save">
        </form>
    </div>
</div>
<?php
include 'footer.php';
?>