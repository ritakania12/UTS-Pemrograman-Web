<?php 
	include "koneksi.php";

	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['telp'];
 
	$query = mysqli_query($host, "INSERT into guru values('$nik', '$nama', '$alamat', '$telp')");

	if($query){
		header("location:guru.php");
	}
	else{
		header("location:guru.php");
	}

 ?>