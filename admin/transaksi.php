<?php
    date_default_timezone_set("Asia/Bangkok");
    
    $kodetr=$_POST['kodetgl'];
    echo $kodetr;
    echo"</br>";

    $tanggal=$_POST['tgl'];
    echo $tanggal;
    echo"</br>";

    $nama=$_POST['nama'];
    echo $nama;
    echo "</br>";
    
    $alamat=$_POST['alamat'];
    echo $alamat;
    echo"</br>";
    
    $telp=$_POST['tlp'];
    echo $telp;
    echo"</br>";

    $keterangan=$_POST['ket'];
    echo $keterangan;
    echo"</br>";

    $total=$_POST['total'];
    echo $total;
    echo"</br>";

    $diskon=$_POST['diskon'];
    echo $diskon;
    echo"</br>";

    $ppn=$_POST['ppn'];
    echo $ppn;
    echo"</br>";

    $grandtotal=$_POST['gtot'];
    echo $grandtotal;
    echo"</br>";

    $bayar=$_POST['bayar'];
    echo $bayar;
    echo"</br>";

    $kembalian=$_POST['kembali'];
    echo $kembalian;
    echo"</br>";

    $a=$_POST['isitabel1'];
    echo $a;
    echo"</br>";

    $array1 = explode(",",$_POST['isitabel1']);
    print_r($array1);
    echo "<br>";

    $array2 = explode(",",$_POST['isitabel2']);
    print_r($array2);
    echo "<br>";

    $array3 = explode(",",$_POST['isitabel3']);
    print_r($array3);
    echo "<br>";

    $array4 = explode(",",$_POST['isitabel4']);
    print_r($array4);
    echo "<br>";

    $array5 = explode(",",$_POST['isitabel5']);
    print_r($array5);
    echo "<br>";

    $array6 = explode(",",$_POST['isitabel6']);
    print_r($array6);
    echo "<br>";


?>