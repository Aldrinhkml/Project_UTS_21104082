<?php
    
    include_once("dbkoneksi2.php");

    $sql = "SELECT NIM, NAMA, JK, JURUSAN, TGLPINJAM, JUDULBUKU FROM peminjam;";

    $hsl = mysqli_query($cnn, $sql);

    echo "<table>
            <theader>
                <tr>    
                <th>No</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>JenisKelamin</th>
                <th>Jurusan</th>
                <th>TglPinjam</th>
                <th>JudulBuku</th>
                <th><a href='Insertdataperpus.php'>TambahData</a></th>
                </tr>
            </theader>
            <tbody>";
            $no =1;
            while($h = mysqli_fetch_Array($hsl) ){
                if($h["JK"]=="L"){
                    $jk = "Laki-Laki";
                }else{
                    $jk = "Perempuan";
                }
                echo "    <tr> 
                    <td>".$no."</td>
                    <td>".$h["NIM"]."</td>
                    <td>".$h["NAMA"]."</td>
                    <td>".$jk."</td>
                    <td>".$h["JURUSAN"]."</td>
                    <td>".$h["TGLPINJAM"]."</td>
                    <td>".$h["JUDULBUKU"]."</td>
                    <td><a href='editdataperpus.php?n=".$h["NIM"]."'>Edit</a> | <a href='deletedataperpus.php?n=".$h["NIM"]."'>Delete</a></td>
                </tr>";
                $no++;
            }
    echo "        </tbody>
    </table>";
