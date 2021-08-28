<h2>List MATA KULIAH</h2>
<table border="1">
    <tr>
        <th>NO</th>
        <th>KODE MATA KULIAH</th>
        <th>MATA KULIAH</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
        include 'koneksi.php';
        $matkul = mysqli_query($koneksi, "SELECT * from tb_matkul");
        $no=1;
        foreach ($matkul as $row){
    ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $row['kd_matkul'] ?></td>
            <td><?php echo $row['matkul'] ?></td>
            <td><a href="latihan11.php?id=<?php echo $row['id'] ?>">Edit</a></td>
            <td><a href="latihan12.php?id=<?php echo $row['id'] ?>">Delete</a></td>
        </tr>
    <?php $no++;
    } ?>
    <a href="latihan10.php">Create Data Mata Kuliah</a>
</table>