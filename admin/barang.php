<?php
include 'header.php';
?>

<?php
$query = "SELECT * FROM barang";
$row = mysqli_query($conn, $query);
?>

<h3>Data Barang</h3>
<a href="barang-store.php"><button type="button" class="btn btn-success" style="margin-bottom:2%; margin-top:2%;">+ Tambah</button></a>
<table class="table table-striped">
    <thead>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Satuan</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Action</th>
    </thead>
    <?php
    $no = 1;
    while ($data = mysqli_fetch_assoc($row)) {
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["kode_barang"]; ?></td>
            <td><?php echo $data["nama_barang"]; ?></td>
            <td><?php echo $data["satuan"]; ?></td>
            <td><?php echo $data["stok"]; ?></td>
            <td>Rp. <?php echo number_format($data["harga_jual"]); ?></td>
            <td>
                <a href="barang-update.php?kode_barang=<?php echo $data['kode_barang']; ?>"><button type="button" class="btn btn-primary" title="Edit"><span class="fa fa-pencil"></span></button></a>
                <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='barang-delete.php?kode_barang=<?php echo $data['kode_barang']; ?>' }" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                <a href="barang-detail.php?kode_barang=<?php echo $data['kode_barang']; ?>"><button type="button" class="btn btn-info" title="Detail"><span class="fa fa-info-circle"></span></button></a>
            </td>
            </td>
        </tr>
        <?php $no++;
    } ?>
    <tfoot>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Satuan</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Action</th>
    </tfoot>
</table>

<?php
include 'footer.php';
?>
