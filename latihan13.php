<?php
    include 'koneksi.php';
    $matkul = mysqli_query($koneksi, "SELECT * from tb_nilai");
    

    function grades($nilai)
    {


        if($nilai <= 100 ){ 
            $grade = "A"; 
        }elseif($nilai <  80 )
        { 
            $grade = "B"; 
        }elseif($nilai <  70 )
        { 
            $grade = "C"; 
        }elseif($nilai <  60 )
        { 
            $grade = "D"; 
        }elseif($nilai <  50 )
        { 
            $grade = "E"; 
        }

        return $grade;
    }
?>
<h2>List Nilai</h2>
<table border="1">
    <tr>
        <th> No </th>
        <th> NPM </th>
        <th> Kode Mata Kuliah </th>
        <th> UTS </th>
        <th> UAS </th>
        <th> Kuis </th>
        <th> Tugas </th>
        <th> Absensi </th>
        <th> Nilai  </th>
        <th> Grade </th>
        <th> Edit </th>
        <th> Delete </th>
    </tr>
    <?php
        foreach ($matkul as $row){
            $nomor = 1;
            $absensi= ($row['kehadiran']/$row['pertemuan'])*100;
            $totalNilai = ($row['uts']*0.3) + ($row['uas']*0.4) + ($row['kuis']*0.1) + ($row['tugas']*0.1) + ($absensi*0.1);
            $grade  = grades($totalNilai);
            
    ?>
        <tr>
            <td><?php echo $nomor ?></td>
            <td><?php echo $row['npm'] ?></td>
            <td><?php echo $row['kd_matkul'] ?></td>
            <td><?php echo $row['uts'] ?></td>
            <td><?php echo $row['uas'] ?></td>
            <td><?php echo $row['kuis'] ?></td>
            <td><?php echo $row['tugas'] ?></td>
            <td><?php echo $absensi ?></td>
            <td><?php echo $totalNilai ?></td>
            <td><?php echo $grade ?></td>
            <td><a href="latihan15.php?id=<?php echo $row['id'] ?>">Edit</a></td>
            <td><a href="latihan16.php?id=<?php echo $row['id'] ?>">Delete</a></td>
        </tr>
    <?php $nomor++;
    } ?>
    <a href="latihan14.php">Create Data Mata Kuliah</a>
</table>