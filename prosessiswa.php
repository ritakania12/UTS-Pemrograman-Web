<?php 
	include "koneksi.php";

	$nis = $_POST['nisn'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['telp'];
 	
 	$nisn = trim($nis," ");

	 
	if($nama != "" && $alamat != "" && $telp != "" && $nisn != ""){
		$query = mysqli_query($host, "INSERT into siswa values('$nisn', '$nama', '$alamat', '$telp')");
		if($query){
			echo "<script>alert('Data berhasil disimpan!');</script>"; 
			header("location:siswa.php");
		}
		else{
			echo "<script>window.alert('Data gagal disimpan!');
			window.location.href='siswa.php'</script>";  
		}
	}else{
		echo "<script>window.alert('Data tidak boleh kosong!');
			window.location.href='siswa.php'</script>"; 
	} 
 ?>