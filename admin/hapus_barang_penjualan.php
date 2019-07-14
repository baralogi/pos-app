<?php
include 'config.php';

$id = $_GET['id'];

$query = "DELETE from detail_penjualan where kode_tr='$id'";
mysqli_query($conn, $query);
header('location: transaksi_penjualan.php');

?>