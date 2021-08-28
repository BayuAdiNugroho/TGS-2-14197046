<h1>Update Data Nilai</h2>
<?php 
        include "koneksi.php";
        $id = $_GET['id'];
        $matkul = mysqli_query($koneksi, "SELECT * from tb_nilai where id='$id'");
        $no=1;
        foreach ($matkul as $data){
?>
<form action="update_nilai.php" method="post">          
        <table>
                <tr>
                        <td>NPM</td>
                        <td>
                                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                <input type="text" name="npm" value="<?php echo $data['npm'] ?>">
                        </td>                                   
                </tr>   
                <tr>
                        <td>Kode Mata Kuliah</td>
                        <td><input type="text" name="kd_matkul" value="<?php echo $data['kd_matkul'] ?>"></td>                                  
                </tr>
                <tr>
                        <td>UTS</td>
                        <td><input type="text" name="uts" value="<?php echo $data['uts'] ?>"></td>                                      
                </tr>   
                <tr>
                        <td>UAS</td>
                        <td><input type="text" name="uas" value="<?php echo $data['uas'] ?>"></td>                                      
                </tr>   
                <tr>
                        <td>KUIS</td>
                        <td><input type="text" name="kuis" value="<?php echo $data['kuis'] ?>"></td>                                    
                </tr>   
                <tr>
                        <td>TUGAS</td>
                        <td><input type="text" name="tugas" value="<?php echo $data['tugas'] ?>"></td>                                  
                </tr>   
                <tr>
                        <td>KEHADIRAN</td>
                        <td><input type="text" name="kehadiran" value="<?php echo $data['kehadiran'] ?>"></td>                                  
                </tr>   
                <tr>
                        <td>PERTEMUAN</td>
                        <td><input type="text" name="pertemuan" value="<?php echo $data['pertemuan'] ?>"></td>                                  
                </tr>   
                <tr>
                        <td></td>
                        <td><input type="submit" value="Simpan"></td>                                   
                </tr>                           
        </table>
</form>
<?php } ?>