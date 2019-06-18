<?php
include 'config.php';

$kode = $_POST['kode'];
$kategori = $_POST['kategori'];
$nama = $_POST['nama'];
$satuan = $_POST['satuan'];
$stok = $_POST['stok'];
$hbeli = $_POST['hbeli'];
$hjual = $_POST['hjual'];

$query = "INSERT INTO barang VALUES('$kode', '$kategori', '$nama', '$satuan', '$stok' ,'$hbeli', '$hjual', null)";
$succes = mysqli_query($conn, $query);
if($succes){
    header('location: barang.php');
}else{
    echo mysqli_error($conn);
}
mysqli_close($conn);

?>