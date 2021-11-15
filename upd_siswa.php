<?php 
	if(isset($_POST['apdet'])){
		$nisn = $_POST['nisn'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$telp = $_POST['telp'];

		include "koneksi.php";
		$query = mysqli_query($host, "SELECT * FROM siswa where nisn = $nisn");
		if(mysqli_num_rows($query) > 0){
			
			$query = "UPDATE siswa set s_nama = '$nama', s_alamat = '$alamat', s_telp = '$telp' where nisn = $nisn";
			$query = mysqli_query($host,$query);
			if($query){
				echo "Berhasil menyimpan";
				header("location:siswa.php");
			}else{
				echo "Gagal menyimpan";
				header("location:siswa.php");
			}

		}else{header("location:siswa.php");}
	}
	else{header("location:siswa.php");}

 ?>