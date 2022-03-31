<?php
include "koneksi.php";

$id = $_GET['id'];
$isi_posting = $_GET['isi_posting'];	
$cmd = $_GET['cmd'];

if($cmd=='save'){
	$sql = "insert into tbtweets(id, isi_posting) values('$id','$isi_posting')";
	$query = mysqli_query($con, $sql) or die ($sql);
}elseif($cmd=='delete'){
	$sql = "delete from tbtweets where id='$id'";
	$query = mysqli_query($con, $sql) or die($sql);
}elseif($cmd=='update'){
	$sql = "update tbtweets set isi_posting='$isi_posting' where id='$id'";
	$query = mysqli_query($con, $sql) or die($sql);
}

header("location:home.php");
?>