<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_reg = $_POST['no_reg'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into tabungan values('$id','$nama','$no_reg','$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:tabungan.php");
 
?>