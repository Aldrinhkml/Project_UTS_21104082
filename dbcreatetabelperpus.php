<?php
   
    include_once("dbkoneksi2.php");
    $sql = "CREATE TABLE peminjam(
        NIM varchar(8) PRIMARY KEY,
        NAMA varchar(30),
        JURUSAN varchar(20),
        JK varchar(1),
        TGLPINJAM date,
        JUDULBUKU varchar(10)
    );";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Pembuatan tabel <strong>peminjam</strong> sukses<br>";
    }else{
        echo "Pembuatan tabel <strong>peminjam</strong> Gagal<br>";
    }
    mysqli_close($cnn);

