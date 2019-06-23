<?php
include 'header.php';
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="index.php">Pegawai</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Pegawai</li>
    </ol>
</nav>

<h3>Tambah Data Pegawai</h3>
<div class="card">
    <div class="card-body">
        <form action="pegawai-store-proses.php" method="POST">
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "<div class='alert alert-danger' role='alert'></span>  NIP Sudah Terdaftar !!</div>";
                }
            }
            ?>
            <div class="row form-group">
                <div class="col">
                    <input type="text" class="form-control" placeholder="NIP" name="nip" required>
                </div>
                <div class="col">
                    <select class="form-control" name="jabatan">
                        <option value="" selected="selected">Pilih Jabatan</option>
                        <?php
                        // query untuk menampilkan semua Jabatan dari tabel 
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
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Nama Depan" name="nama_depan" required>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Nama Belakang" name="nama_belakang" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card" style="margin-bottom: 1em;">
                        <div class="card-header">
                            Jenis Kelamin
                        </div>
                        <div class="card-body">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" value="L" name="jk" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Laki - Laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" value="P" name="jk" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                            </div>
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
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Hak Akses
                        </div>
                        <div class="card-body">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="barang" id="barang">
                                <label class="custom-control-label" for="barang">Master Barang</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="pegawai" id="pegawai">
                                <label class="custom-control-label" for="pegawai">Master Pegawai</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="supplier" id="supplier">
                                <label class="custom-control-label" for="supplier">Master Supplier</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="t1" id="t1">
                                <label class="custom-control-label" for="t1">Transaksi Pembelian</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="t2" id="t2">
                                <label class="custom-control-label" for="t2">Transaksi Penjualan</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="l" id="l">
                                <label class="custom-control-label" for="l">Laporan</label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="form-group">
                <a href="barang.php"><button type="button" class="btn btn-secondary"><span class="fa fa-arrow-left"></span></button></a>
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
</div>
<?php
include 'footer.php';
?>