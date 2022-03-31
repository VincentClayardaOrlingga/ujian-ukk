<?php 
session_start();
include 'koneksi.php';

	$username = $_GET['username'];
	$password = md5($_GET['password']);
    $email = $_GET['email'];
	$cmd = $_GET['cmd'];

	if($cmd == 'submit'){
		$sql = "INSERT INTO users(username,password, email) VALUES('$username', '$password', '$email')";
	 	$query = mysqli_query($con,$sql) or die($sql);
	}
	echo "<script>alert('Register berhasil');window.location='login.php'</script>";
?>