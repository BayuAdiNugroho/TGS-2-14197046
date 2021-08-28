<?php
include 'koneksi.php';	 
$npm        = $_POST['npm'];
$kd_matkul  = $_POST['kd_matkul'];
$uts 	    = $_POST['uts'];
$uas 	    = $_POST['uas'];
$kuis 	    = $_POST['kuis'];
$tugas 	    = $_POST['tugas'];
$kehadiran  = $_POST['kehadiran'];
$pertemuan  = $_POST['pertemuan'];
$query="INSERT INTO `tb_nilai`(`npm`, `kd_matkul`, `uts`, `uas`, `kuis`, `tugas`, `kehadiran`, `pertemuan`) VALUES ('$npm','$kd_matkul','$uts','$uas','$kuis','$tugas','$kehadiran','$pertemuan')";
mysqli_query($koneksi, $query);
header("location:latihan13.php");
?>