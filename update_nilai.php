<?php 
 
include 'koneksi.php';
$id         = $_POST['id'];
$npm        = $_POST['npm'];
$kd_matkul  = $_POST['kd_matkul'];
$uts 	    = $_POST['uts'];
$uas 	    = $_POST['uas'];
$kuis 	    = $_POST['kuis'];
$tugas 	    = $_POST['tugas'];
$kehadiran  = $_POST['kehadiran'];
$pertemuan  = $_POST['pertemuan'];

$query="UPDATE tb_nilai SET npm= '$npm', kd_matkul= '$kd_matkul', uts= '$uts', uas= '$uas', kuis= '$kuis', tugas= '$tugas', kehadiran= '$kehadiran', pertemuan= '$pertemuan' WHERE id='$id'";
mysqli_query($koneksi, $query);
header("location:latihan13.php");?>