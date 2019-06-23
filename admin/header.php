<?php
session_start();
include 'cek.php';
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/global/css/bootstrap.css">
    <script src="../assets/global/js/jquery-3.4.1.js"></script>
    <script src="../assets/global/js/popper.min.js"></script>
    <script src="../assets/global/js/bootstrap.min.js"></script>
    <title>Point of Sale</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-light bg-light" style="margin-bottom:1%;">
        <a class="navbar-brand" href="#">
            <img src="../assets/global/img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="" style="margin-right:0.2em;">
            <label> Point Of Sale </label>
        </a>
        <div class="">
        <label>Hy , <?php echo $_SESSION['username']  ?>&nbsp&nbsp<span class="fa fa-user"></span></label>
        </div>
    </nav>
    <!-- navbar -->

    <!-- sidebar -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom:2%">
                        <img class="img-thumbnail img-fluid" src="../assets/global/img/star-lord.png">
                    </div>
                </div>

                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php"><span class="fa fa-area-chart"></span> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#master" data-toggle="collapse"><span class="fa fa-briefcase"></span> Master</a>
                        <ul id="master" class="nav-item collapse">
                            <a class="nav link" href="barang.php">Data Barang</a>
                            <a class="nav link" href="pegawai.php">Data Pegawai</a>
                            <a class="nav link" href="supplier.php">Data Supplier</a>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#trans" data-toggle="collapse"><span class="fa fa-exchange"></span> Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#trans" data-toggle="collapse"><span class="fa fa-file-word-o"></span> Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><span class="fa fa-sign-out"></span> Log Out</a>
                    </li>
                </ul>
            </div>
            <!-- sidebar -->
            <div class="col-md-10">