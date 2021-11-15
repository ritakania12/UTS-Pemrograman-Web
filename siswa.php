<!DOCTYPE html>
<html>
<head>
	<title>SEKOLAH DASAR KONOHA</title>
    <link rel="stylesheet" href="bootstrap.min.css"> 
    <script src="fontawesome.js"></script>
</head>
<style type="text/css">
	body{
		background-color: #dadada;
	}
	.topnav { 
	  overflow: hidden;
	  background-color: #333;
	}
	.topnav a {
	  float: left;
	  color: #f2f2f2;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	  font-size: 17px;
	}

	.topnav a:hover {
	  background-color: #ddd;
	  color: black;
	}    padding: 15px;
	}
	.sc-header{
		background-color: #adadad; 
		height: 50px;
		line-height: 50px;
		width: 100%;
		color: #000;
		font-weight: bold;
		font-size: 18px;
	}  
	.input_siswa{
		width: 100%;
		border: none;
		border-bottom: 2px solid black;
		background: transparent;
	} 
</style>
<body>
	<img src="bannerr.jpg" style="width: 100%;"> 
	<div class="topnav">
	  <a href="home.html">Home</a> 
	  <a href="siswa.php">Siswa</a>
	  <a href="contact.html">Contact</a>
	  <a href="about.html">About</a>
	</div>
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12"> 
				<div class="col-lg-12" align="center">
					<h2><strong>FORM INPUT DATA SISWA</strong></h2>
				</div>
				<form action="prosessiswa.php" method="post">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-3"><h4>NISN</h4></div>
							<div class="col-lg-9">
								<input type="text" name="nisn" class="input_siswa">
							</div>
						</div>	
					</div>
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-3"><h4>Nama Lengkap</h4></div>
							<div class="col-lg-9">
								<input type="text" name="nama" class="input_siswa">
							</div>
						</div>	
					</div>
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-3"><h4>Alamat</h4></div>
							<div class="col-lg-9">
								<input type="text" name="alamat" class="input_siswa">
							</div>
						</div>	
					</div>
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-3"><h4>No. Telp</h4></div>
							<div class="col-lg-9">
								<input type="text" name="telp" class="input_siswa">
							</div>
						</div>	
					</div> 
					<div class="col-lg-12" align="center" style="margin-top: 25px;">
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-warning">Cancel</button>
					</div>
				</form>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12">
				<table class="table table-hover" style="margin-top: 5%">
					<thead>
					 	<tr>
					 		<th scope="col">NISN</th>
					 		<th scope="col">Nama</th>
					 		<th scope="col">Alamat</th>
					 		<th scope="col">Telp</th> 
					 		<th scope="col">Aksi</th>
					 	</tr>
					 </thead>
					 <tbody>
					 	<?php 
							include "koneksi.php";

							$query = mysqli_query($host, "SELECT * from siswa");
							$jml = mysqli_num_rows($query);
							if($jml > 0):

								$data = mysqli_fetch_array($query);
								foreach($query as $dt){
							 ?>
						 	<tr>
						 		<td><?php echo $dt['nisn']; ?></td>
						 		<td><?php echo strtoupper($dt['s_nama']); ?></td>
						 		<td><?php echo $dt['s_alamat']; ?></td>
						 		<td><?php echo $dt['s_telp']; ?></td>
						 		<td> <a href="s_delete.php?id=<?php echo $dt['nisn'];?>">Hapus</a> | <a href="s_upd.php?id=<?php echo $dt['nisn'];?>">Ubah</a> </td>
						 	</tr>
						 	<?php
					 			}
					 		else:
					 	?>
					 		<td colspan="5" align="center">Tidak ada data</td>
					 		<?php 
					 		endif; ?>
					 	</tbody>
				 </table>
			</div> 
		</div> 
	</div> 
</body>
</html>