<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$kd_matkul = $_POST['kd_matkul'];
$matkul = $_POST['matkul'];

$query="UPDATE tb_matkul SET kd_matkul='$kd_matkul', matkul='$matkul' WHERE id='$id'";
mysqli_query($koneksi, $query);
header("location:latihan9.php");?>