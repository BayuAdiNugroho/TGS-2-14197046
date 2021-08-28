<?php
include 'koneksi.php';
$npm            = $_POST['npm'];
$nama           = $_POST['nama'];
$query="INSERT INTO tabelmhs SET npm='$npm', nama='$nama'";
mysqli_query($koneksi, $query);
header("location:latihan1.php");
?>