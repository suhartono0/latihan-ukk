<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPDB Sekolah</title>
    <style type="text/css">
    </style>
</head>
<body>
<!--Form Isi Data-->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar PPDB</h6>
    </div>
    <div class="card-body">
      	<form method="post">
            <?php 
                include "controller/index.php";
            ?>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <td>NIS</td>
                        <td>
                    	   <input type="text" name="nis" onkeypress="return event.charCode >= 48 && event.charCode <=57" value="<?php echo $row_edit['nis'];?>" class="form-control" required>
                        <td>
                    </div>
                    <div class="col">
                        <td>Nama</td>
                        <td>
                    	   <input type="text" name="nama" onkeypress="return event.charCode < 48 || event.charCode  >57" value="<?php echo $row_edit['nama'];?>" class="form-control" required>
                        </td>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <td>Jenis Kelamin</td>
                        <td>
                            <select name="jk" class="form-control" required>
                                <option value=" "></option>
                                <option value="Laki Laki" <?php if($row_edit['jk'] == "Laki Laki"){echo "selected";} ?>>Laki Laki</option>
                                <option value="Perempuan" <?php if($row_edit['jk'] == "Perempuan"){echo "selected";} ?>>Perempuan</option>
                            <select>
                        </td>
                    </div>
                    <div class="col">
                        <td>Tempat Lahir</td>
                        <td>
                            <input type="text" name="tempat_lahir" onkeypress="return event.charCode < 48 || event.charCode  >57" value="<?php echo $row_edit['tempat_lahir'];?>" class="form-control" required>
                        </td>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <td>Tanggal Lahir</td>
                        <td>
                            <input type="date" name="tgl_lahir" value="<?php echo $row_edit['tgl_lahir'];?>" class="form-control" required>
                        </td>
                    </div>
                    <div class="col">
                        <td>Alamat</td>
                        <td>
                            <input type="text" name="alamat" value="<?php echo $row_edit['alamat'];?>" class="form-control" required>
                        </td>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <td>Asal Sekolah</td>
                        <td>
                            <input type="text" name="asal_sekolah" value="<?php echo $row_edit['asal_sekolah'];?>"  class="form-control" required>
                        </td>
                    </div>
                    <div class="col">
                        <td>Kelas</td>
                        <td>
                            <select name="kelas" class="form-control" required>
                                <option></option>
                                <option value="X" <?php if($row_edit['kelas'] == "X"){echo "selected";} ?>>X (Sepuluh)</option>
                            <select>
                        </td>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <td>Jurusan</td>
                        <td>
                            <select name="jurusan" required class="form-control">
                                <option value=" "></option>
                                <option value="Rekayasa Perangkat Lunak" <?php if($row_edit['jurusan'] == "Rekayasa Perangkat Lunak"){echo "selected";} ?>>Rekayasa Perangkat Lunak</option>
                                <option value="Multimedia" <?php if($row_edit['jurusan'] == "Multimedia"){echo "selected";} ?>>Multimedia</option>
                                <option value="Teknik Komputer Jaringan" <?php if($row_edit['jurusan'] == "Teknik Komputer Jaringan"){echo "selected";} ?>>Teknik Komputer Jaringan</option>
                                <option value="Bisnis Daring Pemasaran" <?php if($row_edit['jurusan'] == "Bisnis Daring Pemasaran"){echo "selected";} ?>>Bisnis Daring Pemasaran</option>
                                <option value="Otomatisasi Tata Kelola Perkantoran" <?php if($row_edit['jurusan'] == "Otomatisasi Tata Kelola Perkantoran"){echo "selected";} ?>>Otomatisasi Tata Kelola Perkantoran</option>
                                <option value="Tata Boga" <?php if($row_edit['jurusan'] == "Tata Boga"){echo "selected";} ?>>Tata Boga</option>
                                <option value="Perhotelan" <?php if($row_edit['jurusan'] == "Perhotelan"){echo "selected";} ?>>Perhotelan</option>
                            <select>
                        </td>
                    </div>
                </div>
            </div>
            <tr>
                <td></td>
                <td>
                    <?php
                        if(isset($_GET['edit'])){ 
                    ?>
                    <input type="submit" name="update" value="update" class="btn btn-primary">
                    <a href="index.php" class="btn btn-warning">batal</a>

                    <?php }else{ ?>
                            <input type="submit" class="btn btn-success" name="simpan" value="simpan">
                    <?php } ?>
                </td>
            </tr>
        </form>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead  style="font-size: 12px;">	
        	<th>ID</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Asal Sekolah</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Aksi</th>
            <th><a type="submit" style="font-size: 6px;" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus ini?, Ini sangan beresiko jika terjadi kesalahan karena semua data akan terhapus dan tidak bisa di recovery, Jika Anda tetap ingin menghapus silahkan klik OK')" href="dashboard.php?menu=index&hapus&id=">Clear Data</a></th>
        
        <?php include "model/index.php" ?>
        </thead>
    </table>
</div>
</table>
</body>
</html>