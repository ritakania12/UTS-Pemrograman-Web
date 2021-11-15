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
	.form-siswa{
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
	  <a href="siswa.php">Siswa</a>
	  <a href="contact.html">Contact</a>
	  <a href="about.html">About</a>
	</div>
	<div class="row">
		<div class="content">  
			<form action="upd_siswa.php" method="post">
				<?php 
					include"koneksi.php";

					$id = $_GET['id'];
					$query = mysqli_query($host, "Select * from siswa where nisn = $id");
					$nama;$nisn;$alamat;$telp;
					foreach($query as $dt){
						$nisn = $dt['nisn'];
						$nama = $dt['s_nama'];
						$alamat = $dt['s_alamat'];
						$telp = $dt['s_telp'];
					}
				 ?>
				<table class="form-siswa" id="form-guru">
					<tr>
						<th colspan="3" style="text-align: center;">FORM SISWA</th>
					</tr>
					<tr>
						<td rowspan="5"><img src="siswa.png"></td>
						<td colspan="2">&nbsp;<small><i>*ubah data siswa</i></small></td>
					</tr>
					<tr>
						<th width="50%">NISN</th>
						<td>
							<input type="hidden" name="nisn" value="<?php echo $nisn?>">
							<?php echo $nisn?>
						</td>
					</tr>
					<tr>
						<th>Nama Lengkap</th>
						<td>
							<input type="text" name="nama"  value="<?php echo $nama?>">
						</td>
					</tr>
					<tr>
						<th>ALAMAT</th>
						<td>
							<input type="text" name="alamat"  value="<?php echo $alamat?>">
						</td>
					</tr>
					<tr>
						<th>No. TELP</th>
						<td>
							<input type="text" name="telp"  value="<?php echo $telp?>">
						</td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" align="right">
							<button class="btn" type="submit" name="apdet">SIMPAN</button>
						</td>
					</tr>
				</table>
			</form>
		</div> 
	</div> 
</body>
</html>