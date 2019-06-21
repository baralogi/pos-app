<?php
include 'header.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="barang.php">Pegawai</a></li>
        <li class="breadcrumb-item active" aria-current="page">Update Pegawai</li>
    </ol>
</nav>

<?php
$id = $_GET['nip'];
$query = "SELECT * FROM pegawai WHERE nip = '$id'";
$row = mysqli_query($conn, $query);
while ($data = mysqli_fetch_assoc($row)) {
    ?>
       <h3>Update Data Pegawai</h3>
    <div class="card">
        <div class="card-body">
            <form action="pegawai-update-proses.php" method="POST">
                <div class="row form-group">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="NIP" name="asc" value="<?php echo $data['nip']; ?>" disabled required>
                        <input type="hidden" name="nip" value="<?php echo $data['nip']; ?>">
                    </div>
                    <div class="col">
                        <select class="form-control" name="jabatan">
                            <?php
                            // query untuk menampilkan semua jabatan dari tabel 
                            $query1 = "SELECT * FROM jabatan";
                            $hasil1 = mysqli_query($conn, $query1);
                            while ($data1 = mysqli_fetch_assoc($hasil1)) {
                                $selected = ($data['kode_jabatan'] == $data1['kode_jabatan'] ? 'selected="selected"' : '');
                                echo '<option value ="' . $data1['kode_jabatan'] . '" '. $selected .'>' . $data1['nama_jabatan'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-success">+</button>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Nama Depan" name="nama_depan" value="<?php echo $data['nama_depan']; ?>" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Nama Belakang" name="nama_belakang" value="<?php echo $data['nama_belakang']; ?>" required>
                    </div>
                </div>
                <div class="form-group"><label>Jenis Kelamin</label></div>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" <?=$data['jk']=="L" ? "checked" : ""?> value="L">
                        <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" <?=$data['jk']=="P" ? "checked" : ""?> value="P">
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Alamat" name="alamat" rows="3"><?php echo $data['alamat']; ?></textarea>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="No. Telepon" name="no_tlp" value="<?php echo $data['no_tlp']; ?>" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $data['email']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Pendidikan" name="pendidikan" value="<?php echo $data['pendidikan']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Rekrut</label>
                    <input type="date" class="form-control" placeholder="Tanggal Rekrut" name="tgl_rekrut" value="<?php echo $data['tgl_rekrut']; ?>" required>
                </div>
                <div class="form-group">
                    <a href="barang.php"><button type="button" class="btn btn-secondary"><span class="fa fa-arrow-left"></span></button></a>
                    <input type="submit" class="btn btn-primary" value="Update">
                </div>
            </form>
        </div>
    </div>
<?php
}
?>

<?php
include 'footer.php';
?>