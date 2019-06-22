<?php
include 'config.php';

$nip = $_POST['nip'];
$jabatan = $_POST['jabatan'];
$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];
$email = $_POST['email'];
$ttl = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$pendidikan = $_POST['pendidikan'];
$hire_date = $_POST['tgl_rekrut'];

if($jk=='L'){
    $jkw = 'Laki-Laki';
}else{
    $jkw = 'Perempuan';
}

$query = "INSERT INTO pegawai VALUES('$nip','$jabatan','$nama_depan','$nama_belakang','$alamat','$no_tlp','$email','$ttl','$jkw','$pendidikan','$hire_date')";
$succes = mysqli_query($conn, $query);

$querys = "SELECT * FROM pegawai";
$row = mysqli_query($conn, $querys);
while ($data = mysqli_fetch_assoc($row)) {

    if($succes){
        header('location: pegawai.php');
    }else if($nip==$data['nip']){
        header("location:pegawai-store.php?pesan=gagal");
    }else{
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
}
