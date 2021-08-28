<h2>List Mahasiswa</h2>
<table border="1">
    <tr>
        <th>NO</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
        include 'koneksi.php';
        $mahasiswa = mysqli_query($koneksi, "SELECT * from tabelmhs");
        $no=1;
        foreach ($mahasiswa as $row){
    ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $row['npm'] ?></td>
            <td><?php echo $row['nama'] ?></td>
            <td><a href="latihan3.php?id=<?php echo $row['id'] ?>">Edit</a></td>
            <td><a href="latihan4.php?id=<?php echo $row['id'] ?>">Delete</a></td>
        </tr>
    <?php $no++;
    } ?>
    <a href="latihan2.php">Create Data Mahasiswa</a>
</table>