<?php
include "config.php";

if (isset($_GET['sup123'])) {
    $cuk = $_GET["sup123"];

    $query = "SELECT * FROM supplier WHERE kode_supplier='$cuk'";
    $row = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_assoc($row)) {
        echo $data['nama_supplier'];
    }
}

if (isset($_GET['sup1234'])) {
    $cuk = $_GET["sup1234"];

    $query = "SELECT * FROM supplier WHERE kode_supplier='$cuk'";
    $row = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_assoc($row)) {
        echo $data['alamat'];
    }
}