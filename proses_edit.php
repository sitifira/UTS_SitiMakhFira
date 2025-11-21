<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $id_karyawan = $_POST['id_karyawan'];
    $nm_karyawan = $_POST['nm_karyawan'];
    $jabatan = $_POST['jabatan'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $gaji = $_POST['gaji'];
    

    #3. Query Update (proses edit data)
    $query = "UPDATE karyawan SET nm_karyawan='$nm_karyawan', jabatan='$jabatan', tgl_masuk='$tgl_masuk', 
    gaji='$gaji'  
    WHERE id_karyawan='$id_karyawan'";

    $edit = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($edit){
        header("location:index.php");
    }else{
        echo "Data Gagal diubah";
    }
?>