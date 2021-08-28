<h2>List Dosen</h2>
<table border="1">
    <tr>
        <th>NO</th>
        <th>Kode Dosen</th>
        <th>NAMA Dosen</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
        include 'koneksi.php';
        $dosen = mysqli_query($koneksi, "SELECT * from tb_dosen");
        $no=1;
        foreach ($dosen as $row){
    ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $row['kode_dosen'] ?></td>
            <td><?php echo $row['nama_dosen'] ?></td>
            <td><a href="latihan7.php?id=<?php echo $row['id'] ?>">Edit</a></td>
            <td><a href="latihan8.php?id=<?php echo $row['id'] ?>">Delete</a></td>
        </tr>
    <?php $no++;
    } ?>
    <a href="latihan6.php">Create Data Dosen</a>
</table>