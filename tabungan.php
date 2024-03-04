<!DOCTYPE html>
<html>
<head>
	<title>tabungan</title>
	<link rel="stylesheet" href="css/style.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
	<div class="header">
		<div class="jarak">
			<center>
			<h2>TABUNGAN BANK SOFTMAZEL</h2>
		</center>
		</div>
	</div>
	<div class="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="tabungan.php">Tabungan</a></li>
			<li><a href="kontak.php">Kontak</a></li>
		</ul>
 </div>
    <div class="content">
        <div class="jarak">
            <!-- kiri -->
            <div class="kiri">
                <!-- blog -->
                <div class="border">
                    <div class="jarak">
 
	<h2>CRUD DATA TABUNGAN</h2>
	<br/>
	<a href="tambah.php" class="icon-button">
        <i class="fas fa-plus" herf="tambah.php">TAMBAH DATA TABUNGAN</i>
    </a>
	<br/>
	<br/>
	<table class="table1">
		<tr>
			<th>ID TABUNGAN</th>
			<th>NAMA PENABUNG</th>
			<th>NO. REGISTRASI</th>
			<th>ALAMAT</th>
			<th colspan="2">OPSI</th>

		</tr>
	<?php
		include 'koneksi.php'; 
		$batas = 2;
		$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
		$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
		$previous = $halaman - 1;
		$next = $halaman + 1;
		
		$data = mysqli_query($koneksi,"select * from tabungan");
		$jumlah_data = mysqli_num_rows($data);
		$total_halaman = ceil($jumlah_data / $batas);
		$data = mysqli_query($koneksi,"select * from tabungan limit $halaman_awal, $batas");
		$nomor = $halaman_awal+1;
		while($d = mysqli_fetch_array($data)){	
	
		// $data = mysqli_query($koneksi,"select * from tabungan");
		// while($d = mysqli_fetch_array($data)){
	?>
			<tr>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['no_reg']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>" onclick="return confirm ('serius mau diedit?');" class="btn btn-outline-success">
					<i class="fas fa-pen"></i> </a></td>
					<td><a href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm ('serius mau dihapus?');" class="btn btn-outline-danger">
						<i class="fas fa-eraser"></i></a>
					</td>
				</td>
			</tr>
			<?php 
		}
		?>
</center>
	</table>
	<nav>
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
					<?php
				}
				?>				
				<li class="page-item">
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
				</li>
			</ul>
		</nav>
	</div> 
    <!-- <div class="footer">
        <div class="jarak">
            <p>copyright © 2017. Your all reserved</p>
        </div>
    </div> -->
</body>
</html>
</body>
</html>