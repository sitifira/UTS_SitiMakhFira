<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $nm_karyawan = $_POST['nm_karyawan'];
    $jabatan = $_POST['jabatan'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $gaji = $_POST['gaji'];
    

    #3. Query Insert (proses tambah data)
    $query = "INSERT INTO karyawan (nm_karyawan,jabatan,tgl_masuk,gaji) 
    VALUES ('$nm_karyawan','$jabatan','$tgl_masuk','$gaji')";

    $tambah = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:index.php");
    }else{
        echo "Data Gagal ditambah";
    }
?>