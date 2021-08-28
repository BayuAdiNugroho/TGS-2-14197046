<h1>Update Data Mahasiswa</h2>
<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$mahasiswa = mysqli_query($koneksi, "SELECT * from tabelmhs where id='$id'");
        $no=1;
        foreach ($mahasiswa as $data){
?>
<form action="update_mahasiswa.php" method="post">		
        <table>
                <tr>
                        <td>NPM</td>
                        <td>
                                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                <input type="text" name="npm" value="<?php echo $data['npm'] ?>">
                        </td>					
                </tr>	
                <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>					
                </tr>	
                <tr>
                        <td></td>
                        <td><input type="submit" value="Simpan"></td>					
                </tr>				
        </table>
</form>
<?php } ?>