<?php
// mnkoneksikan php ke sql
include ('koneksi.php');

// mengambil vlue dari foor tambahn
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$tp_lahir = $_POST['tp_lahir'];
$tg_lahir = $_POST['tg_lahir'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$jurusan = $_POST['jur'];

// query insert tambah data
$query = "INSERT INTO biodata (nama, nisn, tp_lahir, tg_lahir,  alamat, email, jk, jur) VALUES ('$nama', '$nisn', '$tp_lahir', '$tg_lahir', '$alamat', '$email', '$jk', '$jurusan')";

$tambah = mysqli_query($koneksi, $query);

// jika berhasil trigernya apa? 
if($tambah){
    $tambah = mysqli_query($koneksi, $query);

}else{
    echo "data gagal di tambah";
}


?>