<!DOCTYPE html>
<html>
<head>
	<title>WEB SEKLOLAH</title>

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
	} 
	* {
	  box-sizing: border-box;
	} 
	.row{
		display: table;
		width: 100%;
		height: 100%;
	}
	.content { 
		width: 70%;  
		display: table-cell; 
		padding: 15px;
		height: 100%;
	} 
	.sidebar{
		width: 30%;
		display: table-cell;
		text-align: center;
		vertical-align: top;
		height: 100%;
	}
	.sidebar-content{
		padding: 15px;
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
	.table{
		padding: 10px;
	} 
	th{
		text-align: left;
	}
	input[type='text']{
		width: 200px;
		height: 25px;
	} 
	.form-guru{
		margin-top: 50px;
		width: 30%;
		margin-left: 30%;
	}
	.btn{
		width: 50%;
		margin-left: 25%;
		cursor: pointer;
		background-color: #333;
		color: #fff;
		border:none;
		padding: 15px;
	}
	.btn:hover{
		background-color: #bababa;
		color: #000;
	}
	.dt td{
		padding: 3px;
	}
	.dt th{
		padding: 7px;
		text-align: center;
	}
</style>
<body>
	<img src="bannerr.jpg" style="width: 100%;"> 
	<div class="topnav">
	  <a href="home.html">Home</a>
	  <a href="guru.php">Guru</a>
	  <a href="siswa.php">Siswa</a>
	  <a href="contact.html">Contact</a>
	  <a href="about.html">About</a>
	</div>
	<div class="col-lg-12">
	<div class="row">
		<div class="col-lg-6">
			<form action="prosesguru.php" method="post">
				<div class="col-lg-12">
					<h2>FORM GURU</h2>
				</div>
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-4"><h4>NIK</h4></div>
						<div class="col-lg-8">
							<input type="text" name="nik" class="input_guru">
						</div>
					</div>
				</div>
				<table class="form-guru" id="form-guru">
					<tr>
						<th colspan="2">FORM GURU</th>
					</tr>
					<tr>
						<td colspan="2">&nbsp;<small><i>*Isi sesuai dengan data asli</i></small></td>
					</tr>
					<tr>
						<th width="50%">NIK</th>
						<td>
							<input type="text" name="nik">
						</td>
					</tr>
					<tr>
						<th>Nama Lengkap</th>
						<td>
							<input type="text" name="nama">
						</td>
					</tr>
					<tr>
						<th>ALAMAT</th>
						<td>
							<input type="text" name="alamat">
						</td>
					</tr>
					<tr>
						<th>No. TELP</th>
						<td>
							<input type="text" name="telp">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<button class="btn" type="submit">SUBMIT</button>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<div class="col-lg-6">
			<table class="table dt" border="1" width="50%" style="margin-left: 25%;">
			 	<tr>
			 		<th>NIK</th>
			 		<th>Nama</th>
			 		<th>Alamat</th>
			 		<th>Telp</th> 
			 		<th>Aksi</th>
			 	</tr>
			 	<?php 
					include "koneksi.php";

					$query = mysqli_query($host, "SELECT * from guru");
					if(mysqli_num_rows($query) > 0):
					$data = mysqli_fetch_array($query);
					foreach($query as $dt){
				 ?>
			 	<tr>
			 		<td><?php echo $dt['g_nik']; ?></td>
			 		<td><?php echo strtoupper($dt['g_nama']); ?></td>
			 		<td><?php echo $dt['g_alamat']; ?></td>
			 		<td><?php echo $dt['g_telp']; ?></td>
			 		<td><a href="g_delete.php?id=<?php echo $dt['g_nik'];?>">Hapus</a></td>
			 	</tr>
			 	<?php
			 		}
			 		else:
			 	?>
			 		<td colspan="5" align="center">tidak ada data</td>
			 	<?php endif; ?>
			 </table>
		</div> 
	</div> 
</body>
</html>