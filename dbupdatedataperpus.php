<?php
   
    include_once("dbkoneksi2.php");
    
    if(isset($_POST["txNIM"])){
        $nim = $_POST["txNIM"];
        $nama = $_POST["txNAMA"];
        $jk = $_POST["txJK"];
        $jur = $_POST["txJUR"];
        $tglpinjam = $_POST["txTGLPINJAM"];
        $judulbuku = $_POST["txJUDULBUKU"];
        $nimlama = $_POST["txNIMLAMA"];

        $sql = "UPDATE peminjam SET 
            NIM='$nim', 
            NAMA='$nama',
            JK = '$jk',
            JURUSAN = '$jur',
            TGLPINJAM = '$tglpinjam',
            JUDULBUKU = '$judulbuku'
            WHERE NIM='$nimlama';";
        
            //echo "DEBUG: ".$sql;

        $hsl = mysqli_query($cnn, $sql);
        mysqli_close($cnn);
    }
    header("location: tampildataperpus.php");