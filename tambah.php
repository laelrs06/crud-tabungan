<!DOCTYPE html>
<html>
<head>
	<title>tabungan</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>

	<div class="kotak_login">
		<p class="tulisan_login">Tambahkan Data Tabungan</p>
 
		<form method="POST" action="tambah_aksi.php">
 
			<label>Id Tabungan</label>
			<input type="text" name="id" class="form_login" placeholder="masukkan id tabungan anda">

			<label>Nama Penabung</label>
			<input type="text" name="nama" class="form_login" placeholder="masukkan nama anda">
 
 			<label>No Registrasi</label>
			<input type="number" name="no_reg" class="form_login" placeholder="masukkan nomor registrasi anda">

			<label>Alamat</label>
			<input type="text" name="alamat" class="form_login" placeholder="masukkan alamat anda">

			<input type="submit" class="tombol_login" value="SIMPAN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="index.php">KEMBALI</a>
			</center>
		</form>
	</div>
</center>
</body>
</html>



