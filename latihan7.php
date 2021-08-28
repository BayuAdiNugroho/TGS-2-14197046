<h1>Update Data Dosen</h2>
<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$mahasiswa = mysqli_query($koneksi, "SELECT * from tb_dosen where id='$id'");
        $no=1;
        foreach ($mahasiswa as $data){
?>
<form action="update_dosen.php" method="post">		
        <table>
                <tr>
                        <td>Kode Dosen</td>
                        <td>
                                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                <input type="text" name="kode_dosen" value="<?php echo $data['kode_dosen'] ?>">
                        </td>					
                </tr>	
                <tr>
                        <td>Nama Dosen</td>
                        <td><input type="text" name="nama_dosen" value="<?php echo $data['nama_dosen'] ?>"></td>					
                </tr>	
                <tr>
                        <td></td>
                        <td><input type="submit" value="Simpan"></td>					
                </tr>				
        </table>
</form>
<?php } ?>