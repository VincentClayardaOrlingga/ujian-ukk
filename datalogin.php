<?php 

session_start();
require 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * from users where username='$username' and password='$password'";
$query = mysqli_query($con,$sql) or die($sql);
$num = mysqli_num_rows($query);
$result = mysqli_fetch_array($query);


if($num == 1) {
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['login'] = true;

	echo "<script>alert('Login berhasil');window.location='home.php'</script>";
	
}else{
 ?>
 	<script type="text/javascript">
 		location.href = "login.php";
 		alert("Maaf, anda tidak memiliki akses login");
 	</script>
<?php
}
?>