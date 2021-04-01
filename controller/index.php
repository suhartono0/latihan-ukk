<?php
include "config/koneksi.php";

//Function Simpan

if(isset($_POST['simpan'])){
    //ini untuk konek database ketika di simpn
    $sql = mysqli_query($con,"INSERT INTO tb_daftar (nis,nama,jk,tempat_lahir,tgl_lahir,alamat,asal_sekolah,kelas,jurusan) values ('$_POST[nis]','$_POST[nama]','$_POST[jk]','$_POST[tempat_lahir]','$_POST[tgl_lahir]','$_POST[alamat]','$_POST[asal_sekolah]','$_POST[kelas]','$_POST[jurusan]')");
    if($sql){
        echo "<script>alert('data berhasil disimpan');</script>";
    }
    else{
        echo "<script>alert('data gagal disimpan');</script>;";
    }
}


// Function Delete
if(isset($_GET['delete'])){
    $sql = mysqli_query($con,"DELETE FROM tb_daftar WHERE id = '$_GET[id]'");
    if($sql){
        echo "<script>alert('data berhasil dihapus');document.location.href='http://localhost/ppdb/dashboard.php?menu=index'</script>";
    }
    else{
        echo "<script>alert('data gagal dihapus');document.location.href='http://localhost/ppdb/dashboard.php?menu=index'</script>";
    }
}
if(isset($_GET['hapus'])){
    $sql = mysqli_query($con,"DELETE FROM tb_daftar");
    if($sql){
        echo "<script>alert('data berhasil dihapus');document.location.href='http://localhost/ppdb/dashboard.php?menu=index'</script>";
    }
    else{
        echo "<script>alert('data gagal dihapus');document.location.href='http://localhost/ppdb/dashboard.php?menu=index'</script>";
    }
}
    
    if(isset($_GET['edit'])){
        $sql = mysqli_query($con,"SELECT * FROM tb_daftar where id ='$_GET[id]'");
        $row_edit = mysqli_fetch_array($sql);
    }
    else{
        $row_edit =null;
    }

    if(isset($_POST['update'])){
        $sql = mysqli_query($con,"UPDATE tb_daftar set nis = '$_POST[nis]', nama = '$_POST[nama]' ,jk = '$_POST[jk]',tempat_lahir = '$_POST[tempat_lahir]', tgl_lahir = '$_POST[tgl_lahir]', alamat = '$_POST[alamat]', asal_sekolah = '$_POST[asal_sekolah]', kelas = '$_POST[kelas]', jurusan = '$_POST[jurusan]' WHERE id = '$_GET[id]'");
        if($sql){
            echo "<script>alert('Data berhasil diedit');document.location.href='http://localhost/ppdb/dashboard.php?menu=index'</script>";
        }
        else{
            echo "<script>alert('Data gagal diedit');document.location.href='http://localhost/ppdb/dashboard.php?menu=index'</script>";
        }
    }
?>