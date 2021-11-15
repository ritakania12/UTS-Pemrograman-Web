<?php 
	$id = $_GET['id']; 

	include("koneksi.php");
	$query = "DELETE from guru where g_nik = $id";
	$data = mysqli_query($host, $query);
	if($data){
		echo "Data Terhapus";
		header("location:guru.php");
	}
	else{
		echo "Data Tidak Terhapus";
		header("location:guru.php");
	}


 ?>