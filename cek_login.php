<?php 
session_start();
include 'config/koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$data = mysqli_query($con,"SELECT * from tb_user where username='$username' and password='$password'");
 $cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	echo "<script>document.location.href='dashboard.php'</script>";
}else{
	echo "<script>document.location.href='login.php?pesan=gagal'</script>";
}
?>