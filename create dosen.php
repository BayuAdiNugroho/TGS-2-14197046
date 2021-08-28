<?php
include 'koneksi.php';
$kd_dosen = $_POST['kd_dosen'];
$nama_dosen = $_POST['nama_dosen'];
$query="INSERT INTO tb_dosen SET kd_dosen='$kd_dosen', nama_dosen='$nama_dosen'";
mysqli_query($koneksi, $query);
header("location:latihan5.php");
?>