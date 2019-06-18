<?php
include 'header.php';
?>

<?php
$id = $_GET['kode_barang'];
$query = "SELECT kode_barang, nama_barang, k.nama_kategori , satuan, stok, harga_beli, harga_jual FROM barang b JOIN kategori k ON b.kode_kategori=k.kode_kategori WHERE kode_barang = '$id'";
$row = mysqli_query($conn, $query);
while ($data = mysqli_fetch_array($row)) {
    ?>
    <label for="">
        <h2>Detail Data Barang</h2>
    </label>
    <table class="table">
        <tr>
            <td>Kode Barang</td>
            <td><?php echo $data['kode_barang'] ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $data['nama_barang'] ?></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td><?php echo $data['nama_kategori'] ?></td>
        </tr>
        <tr>
            <td>Satuan</td>
            <td><?php echo $data['satuan'] ?></td>
        </tr>
        <tr>
            <td>stok</td>
            <td><?php echo $data['stok'] ?></td>
        </tr>
        <tr>
            <td>Harga Beli</td>
            <td>Rp.<?php echo number_format($data['harga_beli']); ?>,-</td>
        </tr>
        <tr>
            <td>Harga Jual</td>
            <td>Rp.<?php echo number_format($data['harga_jual']) ?>,-</td>
        </tr>
        <tr>
            <td><a href="barang.php"><button type="button" class="btn btn-secondary"><span class="fa fa-arrow-left"></span></button></a>
        </tr>
    </table>

<?php
}
?>

<?php
include 'footer.php';
?>