<?php

require_once("config.php");


if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

if ($query) {
    header ('location: list-siswa.php');
} else {
    header ('l0cation: index.php?status=gagal');
}
} else {
    die("akses dilarang... <a href='index.php>kembali</a>");
}