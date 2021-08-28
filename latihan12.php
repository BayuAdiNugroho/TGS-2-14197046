<?php 
 
include 'koneksi.php';
$id = $_GET['id'];

$query="DELETE FROM tb_matkul WHERE id='$id'";
mysqli_query($koneksi, $query);
header("location:latihan9.php");