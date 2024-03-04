<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_reg = $_POST['no_reg'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update tabungan set nama='$nama', no_reg='$no_reg', alamat='$alamat' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:tabungan.php");
 
?>