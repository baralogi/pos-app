<?php
include 'header.php';
?>

<?php
$query = "SELECT * FROM pegawai p JOIN jabatan j ON p.kode_jabatan=j.kode_jabatan";
$row = mysqli_query($conn, $query);
?>

<h3>Data pegawai</h3>
<a href="pegawai-store.php"><button type="button" class="btn btn-success" style="margin-bottom:2%; margin-top:2%;">+ Tambah</button></a>
<table class="table table-striped">
    <thead>
        <th>No</th>
        <th>NIP</th>
        <th>Nama Lengkap</th>
        <th>Jabatan</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Perekrutan</th>
        <th>Action</th>
    </thead>
    <?php
    $no = 1;
    while ($data = mysqli_fetch_assoc($row)) {
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nip"]; ?></td>
            <td><?php echo $data["nama_depan"] . ' ' . $data["nama_belakang"]; ?></td>
            <td><?php echo $data["nama_jabatan"]; ?></td>
            <td><?php echo $data["jk"]; ?></td>
            <td><?php echo $data["tgl_rekrut"]; ?></td>
            <td>
                <a href="pegawai-update.php?nip=<?php echo $data['nip']; ?>"><button type="button" class="btn btn-primary" title="Edit"><span class="fa fa-pencil"></span></button></a>
                <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='pegawai-delete.php?nip=<?php echo $data['nip']; ?>' }" class="btn btn-danger"><span class="fa fa-trash"></span></a>                <a href="barang-detail.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-info" title="Detail"><span class="fa fa-info-circle"></span></button></a>
            </td>
            </td>
        </tr>
        <?php $no++;
    } ?>
    <tfoot>
        <th>No</th>
        <th>NIP</th>
        <th>Nama Lengkap</th>
        <th>Jabatan</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Perekrutan</th>
        <th>Action</th>
    </tfoot>
</table>

<?php
include 'footer.php';
?>