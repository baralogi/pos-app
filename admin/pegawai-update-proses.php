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

$query = "UPDATE pegawai SET kode_jabatan='$jabatan', nama_depan='$nama_depan', nama_belakang='$nama_belakang', alamat='$alamat', no_tlp='$no_tlp', email='$email', tgl_lahir='$ttl', jk='$jkw', pendidikan='$pendidikan',tgl_rekrut='$hire_date' where nip='$nip'";
$succes = mysqli_query($conn, $query);
if($succes){
    header('location: pegawai.php');
}else{
    echo mysqli_error($conn);
}
mysqli_close($conn);

?>