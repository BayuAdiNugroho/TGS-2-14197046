<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$kd_dosen = $_POST['kd_dosen'];
$nama_dosen = $_POST['nama_dosen'];

$query="UPDATE tb_dosen SET kode_dosen='$kd_dosen', nama_dosen='$nama_dosen' WHERE id='$id'";
mysqli_query($koneksi, $query);
header("location:latihan5.php");?>