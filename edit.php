<!DOCTYPE html>
	<html>
	<head>
		<title>tabungan</title>
		<link rel="stylesheet" type="text/css" href="css/style2.css">
	</head>
	<body>
	 	<?php
		include 'koneksi.php';
		$id = $_GET['id'];
		$data = mysqli_query($koneksi,"select * from tabungan where id='$id'");
		while($d = mysqli_fetch_array($data)){
			?>
			<div class="kotak_login">
	     	<center><h3>EDIT DATA TABUNGAN </h3></center>
			<form method="post" action="update.php">
				<label>Id Tabungan</label>
				<input type="number" name="id" class="form_login" placeholder="masukkan id tabungan anda" value="<?php echo $d['id']; ?>">
	 
				<label>Nama Penabung</label>
				<input type="text" name="nama" class="form_login" placeholder="masukkan nama anda" value="<?php echo $d['nama']; ?>">
	            
	            <label>No Registrasi</label>
				<input type="number" name="no_reg" class="form_login" placeholder="masukkan nomor registrasi anda" value="<?php echo $d['no_reg']; ?>">

				<label>Alamat</label>
				<input type="text" name="alamat" class="form_login" placeholder="masukkan alamat anda" value="<?php echo $d['alamat'];?>">

	 
				<input type="submit" class="tombol_login" value="SIMPAN">
	 
				<br/>
				<br/>
				<center>
					<a class="link" href="index.php">KEMBALI</a>
				</center>
			</form></div>
			<?php 
		}
		?>
	</body>
	</html>