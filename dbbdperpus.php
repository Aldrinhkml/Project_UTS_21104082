<?php
    
    if(isset($_GET["n"])){
        $nim = $_GET["n"];
        $sql = "SELECT NIM, NAMA, JK, JURUSAN, TGLPINJAM, JUDULBUKU FROM peminjam WHERE NIM='".$nim."';";
        $hsl = mysqli_query($cnn, $sql);
        $h = mysqli_fetch_array($hsl);
    }
