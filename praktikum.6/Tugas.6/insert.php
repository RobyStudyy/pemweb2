<?php
    include 'koneksi.php';

    $merk = $_POST['merk'];
    $jenis = $_POST['jenis'];
    $warna = $_POST['warna'];
    $harga = $_POST['harga'];

    $query = "INSERT INTO morevape (merk, jenis, warna, harga)
              VALUES ('$merk', '$jenis', '$warna', '$harga')";

  

    if ($conn-> query($query) === TRUE ){
        header("location: home.php");
    } else{
        echo "Error: " . $query . "<br>" . $conn->error();
    }

    $conn-close();    

?>