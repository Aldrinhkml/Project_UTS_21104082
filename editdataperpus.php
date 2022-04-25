<?php
    include_once("dbkoneksi2.php");
    include_once("dbbdperpus.php");
    if($h["JK"]=="L"){
        $seLaki = " selected";
        $sePerempuan = "";
    }else{
        $seLaki = "";
        $sePerempuan = " selected";
    }
    if($h["JURUSAN"]=="TI"){
        $seTI = " selected";
        $seDGM = "";
    }else{
        $seTI = "";
        $seDGM = " selected";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data perpustakaan</title>
</head>
<body>

<h3>Edit Data perpustakaan</h3>
    <form action="dbupdatedataperpus.php" method="POST">
        <input type="hidden" name="txNIMLAMA" value="<?=$h["NIM"];?>">
        NIM
        <div>
        <input type="text" name="txNIM" value="<?=$h["NIM"];?>">
        </div>
        NAMA
        <div>
        <input type="text" name="txNAMA" value="<?=$h["NAMA"];?>">
        </div>
        Jenis Kelamin
        <div>
            <select name="txJK">
                <option value="L"<?=$seLaki;?>>Laki-Laki</option>
                <option value="P"<?=$sePerempuan;?>>Perempuan</option>
            </select>
        </div>
        Jurusan
        <div>
        <select name="txJUR">
            <option value="TI"<?=$seTI;?>>TI</option>
            <option value="DGM"<?=$seDGM;?>>DGM</option>
        </select>
        </div>
        TGL Pinjam
        <div>
            <input type="date" name="txTGLPINJAM" value="<?=$h["TGLPINJAM"]?>">
        </div>
        Judul Buku
        <div>
            <input type="text" name="txJUDULBUKU" value="<?=$h["JUDULBUKU"]?>">
        </div>

        <div>
            <button type="submit">Update Data</button>
        </div>
    </form>

</body>
</html>