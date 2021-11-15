<?php 
	$id = $_GET['id']; 

	include("koneksi.php");
	$query = "DELETE from siswa where nisn = $id";
	$data = mysqli_query($host, $query);
	if($data){
		echo "Data Terhapus";
		header("location:siswa.php");
	}
	else{
		echo "Data Tidak Terhapus";
		header("location:siswa.php");
	}


 ?>