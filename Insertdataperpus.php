<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data perpustakaan</title>
</head>
<body>
    
    <h3>Tambah Data perpustakaan</h3>
    <form action="dbinsertdataperpus.php" method="POST">

        NIM
        <div>
        <input type="text" name="txNIM">
        </div>
        NAMA
        <div>
        <input type="text" name="txNAMA">
        </div>
        Jenis Kelamin
        <div>
            <select name="txJK">
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        Jurusan
        <div>
        <select name="txJUR">
            <option value="TI">TI</option>
            <option value="DGM">DGM</option>
        </select>
        </div>
        TGL Pinjam
        <div>
            <input type="date" name="txTGLPINJAM">
        </div>
        Judul Buku
        <div>
            <input type="text" name="txJUDULBUKU">
        </div>

        <div>
            <button type="submit">Lajutkan</button>
        </div>
    </form>

</body>
</html>