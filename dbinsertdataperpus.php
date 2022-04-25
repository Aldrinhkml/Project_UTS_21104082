<?php
   
if(isset($_POST["txNIM"])){
     include_once("dbkoneksi2.php");

     $nim = $_POST["txNIM"];
     $nama = $_POST["txNAMA"];
     $jk = $_POST["txJK"];
     $jur = $_POST["txJUR"];
     $tglpinjam = $_POST["txTGLPINJAM"];
     $judulbuku = $_POST["txJUDULBUKU"];

     $sqlINSERT = "INSERT INTO peminjam(NIM, NAMA, JK, JURUSAN, TGLPINJAM, JUDULBUKU) VALUES
     ('".$nim."','".$nama."','".$jk."','".$jur."','".$tglpinjam."','".$judulbuku."');";

    //echo "SQL: ". $sqlINSERT . "<br>";

     $hsl = mysqli_query($cnn, $sqlINSERT);

     if($hsl){
         echo "Insert Data sukses<br>";
     }else{
         echo "Insert Data gagal<br>";
     }

     mysqli_close($cnn);
}