<?php 
 
include 'koneksi.php';
$id = $_GET['id'];

$query="DELETE FROM tb_dosen WHERE id='$id'";
mysqli_query($koneksi, $query);
header("location:latihan5.php");