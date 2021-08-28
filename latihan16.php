<?php 
 
include 'koneksi.php';
$id = $_GET['id'];

$query="DELETE FROM tb_nilai WHERE id='$id'";
mysqli_query($koneksi, $query);
header("location:latihan13.php");