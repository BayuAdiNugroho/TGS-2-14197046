<h1>Update Data Dosen</h2>
<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$matkul = mysqli_query($koneksi, "SELECT * from tb_matkul where id='$id'");
        $no=1;
        foreach ($matkul as $data){
?>
<form action="update_matkul.php" method="post">		
        <table>
                <tr>
                        <td>Kode Mata Kuliah</td>
                        <td>
                                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                <input type="text" name="kd_matkul" value="<?php echo $data['kd_matkul'] ?>">
                        </td>					
                </tr>	
                <tr>
                        <td>Nama Mata Kuliah</td>
                        <td><input type="text" name="matkul" value="<?php echo $data['matkul'] ?>"></td>					
                </tr>	
                <tr>
                        <td></td>
                        <td><input type="submit" value="Simpan"></td>					
                </tr>				
        </table>
</form>
<?php } ?>