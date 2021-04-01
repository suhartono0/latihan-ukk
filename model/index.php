<?php
    $sql = mysqli_query($con,"SELECT * from tb_daftar");
    while($row = mysqli_fetch_array($sql)){
?>

    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nis']?></td>
        <td><?php echo $row['nama']?></td>
        <td><?php echo $row['jk']?></td>
        <td><?php echo $row['tempat_lahir']?></td>
        <td><?php echo $row['tgl_lahir']?></td>
        <td><?php echo $row['alamat']?></td>
        <td><?php echo $row['asal_sekolah']?></td>
        <td><?php echo $row['kelas']?></td>
        <td><?php echo $row['jurusan']; ?></td>

        <td><a onclick="return confirm('Apakah anda yakin ingin menghapus ini?')" href="dashboard.php?menu=index&delete&id=<?php echo $row['id']?>"><i class="fa fa-trash"></i></a></td>

        <td><a onclick="return confirm('Apakah anda yakin ingin mengedit ini?')" href="dashboard.php?menu=index&edit&id=<?php echo $row['id']?>"><i class="fa fa-edit"></i></a></td>
    </tr>
<?php
    }
?>