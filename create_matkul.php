<?php
include 'koneksi.php';
$kd_matkul = $_POST['kd_matkul'];
$matkul = $_POST['matkul'];
$query="INSERT INTO tb_matkul SET kd_matkul='$kd_matkul', matkul='$matkul'";
mysqli_query($koneksi, $query);
header("location:latihan9.php");
?>